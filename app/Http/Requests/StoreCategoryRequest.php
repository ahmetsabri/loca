<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'array'],
            'name.tr' => ['required'],
            'name.ru' => ['required'],
            'name.en' => ['required'],
        ];
    }
}
