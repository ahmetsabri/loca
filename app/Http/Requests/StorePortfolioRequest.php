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
        // dd($this->all());
        return [
            'title' => ['required', 'array'],
            'title.tr' => ['required', 'string'],
            'title.ru' => ['required', 'nullable', 'string'],
            'title.en' => ['required', 'nullable', 'string'],
            'description' => ['required', 'array'],
            'description.tr' => ['required', 'string'],
            'description.ru' => ['required', 'nullable', 'string'],
            'description.en' => ['required', 'nullable', 'string'],
            // 'net' => ['required', 'integer', 'gt:0'],
            // 'gross' => ['required', 'integer', 'gt:0'],
            'user_id' => ['required', Rule::exists('users', 'id')],
            'price_in_tl' => ['required', 'integer', 'gt:0'],
            // 'price_in_eur' => ['required', 'integer', 'gt:0'],
            // 'price_in_usd' => ['required', 'integer', 'gt:0'],
            'category_id' => ['required', Rule::exists('categories', 'id')->withoutTrashed()],
            'promotion_url' => ['sometimes', 'nullable', 'url'],
            'location' => ['required'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image'],
            'brochure' => ['sometimes', 'mimes:pdf', 'extensions:pdf'],
            'province_id' => ['required', Rule::exists('provinces', 'id')],
            'town_id' => ['required', Rule::exists('towns', 'id')],
            'district_id' => ['required', Rule::exists('districts', 'id')],

            'info' => ['required', 'array'],
            'info.*.tr' => ['sometimes', 'nullable'],
            'info.*.ru' => ['sometimes', 'nullable'],
            'info.*.en' => ['sometimes', 'nullable'],

            'features' => ['sometimes', 'array'],
            'features.*.*' => ['sometimes', 'nullable','exists:feature_options,id'],
        ];
    }

    public function mapInfo(): array
    {
        $filledInfo = array_filter($this->info, fn ($info) => ! is_null(Arr::get($info, 'tr')));

        $onlyTurkishfilled = array_filter($this->info, function ($info) {
            return ! is_null(Arr::get($info, 'tr')) && (is_null(Arr::get($info, 'en')) && is_null(Arr::get($info, 'ru')));
        });

        foreach ($onlyTurkishfilled as $index => $info) {
            $onlyTurkishfilled[$index]['ru'] = $onlyTurkishfilled[$index]['en'] = $onlyTurkishfilled[$index]['tr'];
            unset($filledInfo[$index]);
        }

        return $onlyTurkishfilled + $filledInfo;
    }
}
