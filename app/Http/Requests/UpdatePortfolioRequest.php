<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class UpdatePortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'array'],
            'title.tr' => ['required', 'string'],
            'title.ru' => ['required', 'nullable', 'string'],
            'title.en' => ['required', 'nullable', 'string'],
            'description' => ['required', 'array'],
            'description.tr' => ['required', 'string'],
            'description.ru' => ['required', 'nullable', 'string'],
            'description.en' => ['required', 'nullable', 'string'],
            'user_id' => ['required', Rule::exists('users', 'id')],
            'price_in_tl' => ['required', 'integer', 'gt:0'],
            'category_id' => ['required', Rule::exists('categories', 'id')->withoutTrashed()],
            'promotion_url' => ['sometimes', 'nullable', 'url'],
            'location' => ['required', 'string'],
            'province_id' => ['required', Rule::exists('provinces', 'id')],
            'town_id' => ['required', Rule::exists('towns', 'id')],
            'district_id' => ['required', Rule::exists('districts', 'id')],
            'info' => ['required', 'array'],
            'info.*.tr' => ['sometimes', 'nullable'],
            'info.*.ru' => ['sometimes', 'nullable'],
            'info.*.en' => ['sometimes', 'nullable'],

            'features' => ['sometimes', 'array'],
            'features.*.*' => ['sometimes', 'nullable', 'exists:feature_options,id'],

        ];
    }

    public function mapInfo(): array
    {
        $filledInfo = $this->info;

        $onlyTurkishfilled = array_filter($this->info, function ($info) {
            return ! is_null(Arr::get($info, 'tr')) && (is_null(Arr::get($info, 'en')) && is_null(Arr::get($info, 'ru')));
        });

        foreach ($onlyTurkishfilled as $index => $info) {
            $onlyTurkishfilled[$index]['ru'] = $onlyTurkishfilled[$index]['en'] = $onlyTurkishfilled[$index]['tr'];
            unset($filledInfo[$index]);
        }

        return $onlyTurkishfilled + $filledInfo;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'price_in_tl' => str_replace('.', '', $this->input('price_in_tl', '')),
        ]);
    }
}
