<?php

namespace App\Filament\Resources;

use App\Models\Info;
use Filament\Tables;
use App\Models\Town;
use App\Models\Category;
use App\Models\District;
use Filament\Forms\Form;
use App\Enums\RealestateStatus;
use App\Models\RealEstate;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use App\Forms\Components\LocationPicker;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\CheckboxList;
use App\Forms\Components\RealestateInfosInput;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use App\Filament\Resources\RealEstateResource\Pages;
use App\Livewire\InfoInput;
use App\Models\Portfolio;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Livewire;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use SolutionForest\FilamentTranslateField\Forms\Component\Translate;

use Filament\Forms\Components\ViewField;
use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Model;

class RealEstateResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationLabel = 'İlanlar';

    protected static ?string $modelLabel = 'İlan';

    protected static ?string $pluralModelLabel = 'İlanlar';

    protected static ?string $navigationIcon = 'heroicon-s-home-modern';

    public static array $infos = [];


    public static function form(Form $form): Form
    {
        return $form

            ->schema(
                [

                    Translate::make()->prefixLocaleLabel()
                        ->schema([
                            TextInput::make('title')->label('Başlık')->required()->columnSpanFull(),
                            RichEditor::make('description')->label('Açıklama')->required()->columnSpanFull(),
                        ])->columnSpanFull()->contained(false),

                    SelectTree::make('category_id')
                        ->label('Kategori')
                        ->relationship('category', 'name', 'parent_id')
                        ->searchable()
                        ->required()
                        ->defaultOpenLevel(3)
                        ->expandSelected()
                        ->reactive()
                        ->live()
                        ->columnSpanFull()
                          ->afterStateUpdated(fn (SelectTree $component) => $component
                        ->getContainer()
                        ->getComponent('infoFields')
                        ->getChildComponentContainer()
                        ->fill()),
                            Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->columnSpanFull(),
                    Section::make('infos')
                ->schema(fn (Get $get): array => self::prepareInfo($get('category_id')))
                ->key('infoFields')
                ->dehydrated(),


                    SpatieMediaLibraryFileUpload::make('images')
                        ->reorderable()
                        ->collection('realestates')
                        ->imageEditor()
                        ->multiple()
                        ->responsiveImages(false)
                        ->live()
                        ->columnSpanFull()
                        ->minFiles(1)
                        ->maxFiles(20)
                        ->panelLayout('grid'),

                    TextInput::make('price_in_tl')
                        ->label('Fiyat')
                        ->required(),

                    Select::make('province_id')->label('il')
                    ->relationship('province', 'name')->searchable()
                        ->searchDebounce(100)->reactive() // This makes the field trigger updates on change
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('town_id', null);
                        })
                        ->preload(),

                    Select::make('town_id')
                        ->preload()
                        ->label('İlçe')
                        ->relationship('town')
                        ->options(function (callable $get) {
                            $provinceId = $get('province_id');

                            if ($provinceId) {
                                return Town::where('province_id', $provinceId)->pluck('name', 'id');
                            }

                            return [];
                        })
                        ->getSearchResultsUsing(function (string $search, callable $get) {
                            $provinceId = $get('province_id');

                            return Town::where('province_id', $provinceId)->where('name', 'like', "%$search%")->pluck('name', 'id');
                        })
                        ->reactive()
                        ->searchable()
                        ->searchDebounce(200)
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('district_id', null);
                        }),

                    Select::make('district_id')
                        ->preload()
                        ->label('Mahalle / Köy')
                        ->options(function (callable $get) {
                            $countyId = $get('town_id');

                            if ($countyId) {
                                return District::where('town_id', $countyId)->pluck('name', 'id');
                            }

                            return [];
                        })->getSearchResultsUsing(function (string $search, callable $get) {
                            $countyId = $get('town_id');

                            return District::where('town_id', $countyId)->where('name', 'like', "%$search%")->pluck('name', 'id');
                        })->searchable()->searchDebounce(200),

                    Select::make('status')->label('Durum')->options(
                        array_flip(RealestateStatus::pluckLabelsAndValues())
                    )->default(RealestateStatus::getLabel(1))
                    ->selectablePlaceholder(false),


                    CheckboxList::make('features')
                        ->label('Özelliklerler')
                        ->relationship('featuresMany')
                        ->searchable()
                        ->required()
                        ->options(function (callable $get) {
                            $categoryId = $get('category_id');
                            if (! $categoryId) {
                                return [];
                            }
                            $category = Category::findOrFail($categoryId)->load('features');

                            return $category->features
                                ->pluck('name', 'id')
                                ->toArray();
                        })
                        ->columns(3)
                        ->columnSpanFull()
                        ->visible(function (callable $get) {
                            return ! is_null($get('category_id'));
                        }),

                    LocationPicker::make('location')
                        ->afterStateUpdated(function (string $state) {
                        })
                        ->label('Konum')
                        ->columnSpanFull(),
                ]
            );
    }

    public static function table(Table $table): Table
    {
        $categories = Category::isRoot()->get()->pluck('name', 'id');


        return $table
            ->reorderable('sort')
            ->columns([
                TextColumn::make('title')->label('Başlık')
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Fiyat (₺)')
                    ->sortable(),
                TextColumn::make('price_in_usd')
                    ->label('Fiyat ($)'),
                TextColumn::make('price_in_eur')
                    ->label('Fiyat (€)'),
                SelectColumn::make('status')->label('Durum')
                    ->options(array_flip(RealestateStatus::pluckLabelsAndValues()))
                    ->selectablePlaceholder(false)
                    ->afterStateUpdated(function ($record, $state) {
                        return Notification::make()
                            ->title('Durum Güncellendi')
                            ->success()
                            ->send();
                    }),

                TextColumn::make('CategoryTree')->label('kategori'),

            ])
            ->filters([
                SelectFilter::make('Kategori')
                    ->query(function ($query, array $data) {
                        if (is_null($data['value'])) {
                            return $query;
                        }
                        $values = Category::find($data['value'])?->descendants->pluck('id');

                        if (! $values) {
                            return $query->whereIn('category_id', [$values]);
                        }
                        $query->whereIn('category_id', $values->toArray());
                    })
                    ->options($categories->toArray())
                    ->attribute('category_id'),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make()->color('primary'),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ReplicateAction::make('copy')

                        ->label('Kopyala')
                        ->color(Color::Indigo)
                        ->modal(false)
                        ->successNotification(
                            Notification::make()
                                ->success()
                                ->title('Kopyalandı')
                        ),

                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRealEstates::route('/'),
            'create' => Pages\CreateRealEstate::route('/create'),
            'edit' => Pages\EditRealEstate::route('/{record}/edit'),
        ];
    }

    public static function prepareInfo(?int $categoryId): array
    {
        $infos = Info::whereRelation('category', 'category_id', '=', $categoryId)
            ->with('options')->get();

        if (! $infos) {
            return [];
        }
        $schema = [];
        foreach ($infos as $info) {
            if ($info->options->count() > 0) {
                $schema[] = Select::make('info_'.$info->id)
                    ->options($info->options->pluck('name', 'id')->toArray())
                    ->label($info->name)
                    ->selectablePlaceholder(false);
                continue;
            }


            $schema[] = TextInput::make('info_' . $info->id)
                ->label($info->name);
        }
        return $schema;
    }

      public static function getRecord()
      {
          return self::$record;
      }
}
