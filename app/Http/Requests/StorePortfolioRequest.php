<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class StorePortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'array'],
            'title.tr' => ['required', 'string'],
            'title.ru' => ['sometimes', 'nullable', 'string'],
            'title.en' => ['sometimes', 'nullable', 'string'],
            'description' => ['required', 'array'],
            'description.tr' => ['required', 'string'],
            'description.ru' => ['required', 'nullable', 'string'],
            'description.en' => ['sometimes', 'nullable', 'string'],
            'price_in_tl' => ['required', 'integer', 'gt:0'],
            'price_in_eur' => ['required', 'integer', 'gt:0'],
            'price_in_usd' => ['required', 'integer', 'gt:0'],
            'category_id' => ['required', Rule::exists('categories', 'id')->withoutTrashed()],
            'promotion_url' => ['sometimes', 'nullable', 'url'],
            'location' => ['required', 'string'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image'],
            'brochure' => ['required', 'mimes:pdf', 'extensions:pdf'],

            'info' => ['required', 'array'],
            'info.*.tr' => ['sometimes', 'nullable'],
            'info.*.ru' => ['sometimes', 'nullable'],
            'info.*.en' => ['sometimes', 'nullable'],

            'features' => ['required', 'array'],
            'features.*.*.tr' => ['sometimes', 'nullable'],
            'features.*.*.ru' => ['sometimes', 'nullable'],
            'features.*.*.en' => ['sometimes', 'nullable'],
        ];
    }

    public function mapInfo(): array
    {
        $filledInfo = array_filter($this->info, fn ($info) => Arr::get($info, 'tr'));

        $onlyTurkishfilled = array_filter($this->info, function ($info) {
            return Arr::get($info, 'tr') && (! Arr::get($info, 'en') && ! Arr::get($info, 'ru'));
        });

        foreach ($onlyTurkishfilled as $index => $info) {
            $onlyTurkishfilled[$index]['ru'] = $onlyTurkishfilled[$index]['en'] = $onlyTurkishfilled[$index]['tr'];
            unset($filledInfo[$index]);
        }

        return $onlyTurkishfilled + $filledInfo;
    }

    public function mapFeatures(): array
    {
        $data = [];
        foreach ($this->features as $id => $feature) {
            $filledFeatures = array_filter($feature, fn ($locale) => Arr::get($locale, 'tr') || Arr::get($locale, 'ru') || Arr::get($locale, 'en'));
            $data[] = $filledFeatures;
        }

        return array_filter($data);
    }
}
