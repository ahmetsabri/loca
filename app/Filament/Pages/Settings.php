<?php

namespace App\Filament\Pages;

use Closure;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{
    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('Dil')
                        ->schema([
                            Select::make('language.default')
                                ->label('Ana dili')
                                ->options(config('app.locales'))
                                ->selectablePlaceholder(false),
                        ]),
                    Tabs\Tab::make('Logo')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('logo')
                                ->label('Logo')
                                ->image()
                                ->imageEditor()
                                ->required(),
                        ]),
                    Tabs\Tab::make('SEO')
                        ->schema([
                            TextInput::make('seo.title')
                                ->label('Meta başlık (title)')
                                ->nullable(),
                            TextInput::make('seo.description')
                                ->label('Meta açıklama (description)')
                                ->nullable(),
                            Textarea::make('seo.keywords')
                                ->label('Meta keywords')
                                ->nullable(),
                        ]),
                    Tabs\Tab::make('İletişim')
                        ->schema([
                            TextInput::make('social_media.email')
                                ->label('E-posta')
                                ->email()
                                ->nullable(),
                            TextInput::make('social_media.phone')
                                ->label('Telefon')
                                ->nullable(),
                            TextInput::make('social_media.facebook')
                                ->label('Facebook')
                                ->url()
                                ->nullable(),
                            TextInput::make('social_media.intagaram')
                                ->label('Instagaram')
                                ->url()
                                ->nullable(),
                            TextInput::make('social_media.youtube')
                                ->label('Youtube')
                                ->url()
                                ->nullable(),
                            TextInput::make('social_media.whatsapp')
                                ->label('whatsapp')
                                ->placeholder('5xxxxxxxxx')
                                ->numeric()
                                ->length(10)
                                ->nullable(),
                        ]),
                ]),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('settings.page.title');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return __('settings.notifications.saved');
    }

    public function getTitle(): string
    {
        return __('settings.page.title');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('settings.form.actions.save'))
                ->submit('data')
                ->keyBindings(['mod+s']),
        ];
    }
}
