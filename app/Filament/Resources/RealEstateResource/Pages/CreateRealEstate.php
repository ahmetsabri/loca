<?php

namespace App\Filament\Resources\RealEstateResource\Pages;

use App\Filament\Resources\RealEstateResource;
use App\Models\FeatureOption;
use App\Models\PortfolioFeature;
use Filament\Resources\Pages\CreateRecord;

class CreateRealEstate extends CreateRecord
{
    protected static string $resource = RealEstateResource::class;

    protected array $infos = [];
    protected array $features = [];

    protected function afterValidate(): void
    {
        foreach ($this->data as $key => $value) {
            if (str_contains($key, 'info_')) {
                $this->infos[str($key)->afterLast('_')->value()] = $value;
                unset($this->data[$key]);
            }
        }
        $this->features = $this->data['features'];
    }

    protected function afterCreate(): void
    {
        $infos = [];
        foreach ($this->infos as $infoId => $value) {
            $infos[$infoId] = ['value' => $value];

            $this->getRecord()->infos()->create([
                'info_id' => $infoId,
                'value' => $value
            ]);
        }

        foreach ($this->features as $value) {
            PortfolioFeature::create([
                'portfolio_id' => $this->getRecord()->id,
                'feature_id' => FeatureOption::findOrFail($value)->feature_id,
                'feature_option_id' => $value
            ]);
        }
    }
}
