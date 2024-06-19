<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'name.en' => ['required'],
            'name.ru' => ['required'],
            'promotion_url' => ['sometimes', 'nullable'],
            'description' => ['required', 'array'],
            'description.tr' => ['required'],
            'description.en' => ['required'],
            'description.ru' => ['required'],
            'features' => ['required', 'array'],
            'sub_services' => ['sometimes', 'array'],
            'department_id' => ['required', 'exists:departments,id'],
        ];
    }
}
