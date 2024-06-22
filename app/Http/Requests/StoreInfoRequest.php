<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoRequest extends FormRequest
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
            'name' => ['required', 'array'],
            'name.tr' => ['required'],
            'name.ru' => ['required'],
            'name.en' => ['required'],
            'filterable' => ['sometimes', 'nullable'],
        ];
    }

    public function prepareForValidation()
    {
        if (! $this->has('filterable')) {
            $this->merge([
                'filterable' => 0,
            ]);
        }
    }
}
