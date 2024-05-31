<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
