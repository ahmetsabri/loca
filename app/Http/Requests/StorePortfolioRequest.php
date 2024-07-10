<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
            'features.*.*' => ['sometimes', 'nullable', 'exists:feature_options,id'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'price_in_tl' => str_replace('.', '', $this->input('price_in_tl', '')),
        ]);
    }
}
