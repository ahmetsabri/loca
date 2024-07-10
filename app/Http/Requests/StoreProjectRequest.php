<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
            // 'price_in_eur' => ['required', 'integer', 'gt:0'],
            // 'price_in_usd' => ['required', 'integer', 'gt:0'],
            'promotion_url' => ['sometimes', 'nullable', 'url'],
            'location' => ['required'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image'],
            // 'brochure' => ['sometimes', 'mimes:pdf', 'extensions:pdf'],
            'features' => ['sometimes', 'array'],
            'features.*.tr' => ['sometimes', 'nullable'],
            'features.*.ru' => ['sometimes', 'nullable'],
            'features.*.en' => ['sometimes', 'nullable'],
            'province_id' => ['required', Rule::exists('provinces', 'id')],
            'town_id' => ['required', Rule::exists('towns', 'id')],
            'district_id' => ['required', Rule::exists('districts', 'id')],
            'delivery_date' => ['required', 'date'],
            'site_feature' => ['required', 'array'],
            'payment_plan' => ['required', 'array'],
            'payment_plan.tr' => ['required', 'string'],
            'payment_plan.ru' => ['required', 'nullable', 'string'],
            'payment_plan.en' => ['required', 'nullable', 'string'],
            'extra_payment' => ['required', 'array'],
            'extra_payment.tr' => ['required', 'string'],
            'extra_payment.ru' => ['required', 'nullable', 'string'],
            'extra_payment.en' => ['required', 'nullable', 'string'],
            'transportaion' => ['required', 'array'],
            'transportaion.*.tr' => ['sometimes', 'nullable'],
            'transportaion.*.ru' => ['sometimes', 'nullable'],
            'transportaion.*.en' => ['sometimes', 'nullable'],
            'transportaion.*.duration' => ['sometimes', 'nullable'],
            'transportaion.*.distance' => ['sometimes', 'nullable'],

            'flats' => ['array', 'required'],
            'flats.*.rooms' => ['required', 'string'],
            'flats.*.bathroom_count' => ['required', 'string'],
            'flats.*.net' => ['required', 'string'],
            'flats.*.gross' => ['required', 'string'],
            'flats.*.description' => ['required', 'array'],
            'flats.*.description.tr' => ['required', 'required'],
            'flats.*.description.ru' => ['required', 'required'],
            'flats.*.description.en' => ['required', 'required'],
            'flats.*.features' => ['required', 'array'],
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
