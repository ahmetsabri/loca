<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'price_in_tl' => ['required', 'integer', 'gt:0'],
            'promotion_url' => ['sometimes', 'nullable', 'url'],
            'images' => ['sometimes', 'array'],
            'images.*' => ['required', 'image'],
            'features' => ['sometimes', 'array'],
            'features.*.tr' => ['sometimes', 'nullable'],
            'features.*.ru' => ['sometimes', 'nullable'],
            'features.*.en' => ['sometimes', 'nullable'],
            'province_id' => ['required', Rule::exists('provinces', 'id')],
            'town_id' => ['required', Rule::exists('towns', 'id')],
            'district_id' => ['required', Rule::exists('districts', 'id')],
            'delivery_date' => ['required', 'date'],
            'location' => ['required', 'string'],

            'site_feature' => ['required', 'array'],
            'payment_plan' => ['sometimes', 'array'],
            'payment_plan.tr' => ['sometimes'],
            'payment_plan.ru' => ['sometimes', 'nullable'],
            'payment_plan.en' => ['sometimes', 'nullable'],
            'extra_payment' => ['sometimes', 'array'],
            'extra_payment.tr' => ['sometimes'],
            'extra_payment.ru' => ['sometimes', 'nullable'],
            'extra_payment.en' => ['sometimes', 'nullable'],
            'transportaion' => ['required', 'array'],
            'transportaion.*.tr' => ['sometimes', 'nullable'],
            'transportaion.*.ru' => ['sometimes', 'nullable'],
            'transportaion.*.en' => ['sometimes', 'nullable'],
            'transportaion.*.duration' => ['sometimes', 'nullable'],
            'transportaion.*.distance' => ['sometimes', 'nullable'],

            'flats' => ['array', 'sometimes'],
            'flats.*.rooms' => ['sometimes'],
            'flats.*.bathroom_count' => ['sometimes'],
            'flats.*.net' => ['sometimes'],
            'flats.*.gross' => ['sometimes'],
            'flats.*.description' => ['sometimes', 'array'],
            'flats.*.description.tr' => ['sometimes'],
            'flats.*.description.ru' => ['sometimes'],
            'flats.*.description.en' => ['sometimes'],
            'flats.*.features' => ['sometimes', 'array'],
            'flats.*.features.*.tr' => ['sometimes', 'nullable'],
            'flats.*.features.*.ru' => ['sometimes', 'nullable'],
            'flats.*.features.*.en' => ['sometimes', 'nullable'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'price_in_tl' => str_replace('.', '', $this->input('price_in_tl', '')),
        ]);
    }
}
