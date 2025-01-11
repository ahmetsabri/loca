<?php

namespace App\Filament\Resources\RealEstateResource\Pages;

use App\Filament\Resources\RealEstateResource;
use App\Models\Info;
use App\Models\InfoOption;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditRealEstate extends EditRecord
{
    protected static string $resource = RealEstateResource::class;

    public $location = '';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // dd($this->getRecord()->infos);
        foreach ($this->getRecord()->infos as $key => $value) {
            if (is_null($value->value_id)) {
                $data['info_'.$value->info_id] = $value->value;
                continue;
            }

            $data['info_'.$value->info_id] = InfoOption::find($value->value_id)->id;
        }
        return $data;
    }
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $mainData = collect($data)->except('images');

        $record->update($mainData->toArray());

        $infos = [];

        // dd($data);
        $record->infos()->delete();

        foreach ($data as $key => $value) {
            if (str_contains($key, 'info_')) {
                // dd($key, $value);
                $newKey = str($key)->afterLast('_')->value();
                $info = Info::findOrFail($newKey)?->load('options');

                $valueId = null;
                if ($info->options->count()) {
                    $valueId = $value;
                }
                $infos[] = [
                    'info_id' => $newKey,
                    'value' => $info->options->count() == 0 ? $value : null,
                    'value_id' => $info->options->count() ? (int) $value : null
                ];
            }
        }
        $record->infos()->createMany($infos);

        return $record;
    }
}
