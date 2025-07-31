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
            'description.tr' => ['sometimes','nullable'],
            'description.en' => ['sometimes','nullable'],
            'description.ru' => ['sometimes','nullable'],
            'features' => ['required', 'array'],
            'sub_services' => ['sometimes', 'array'],
            'top_right_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'top_left_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'bottom_right_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'bottom_middle_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'bottom_left_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
