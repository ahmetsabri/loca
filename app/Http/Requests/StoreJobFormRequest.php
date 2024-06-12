<?php

namespace App\Http\Requests;

use App\Enums\FormTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class StoreJobFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'attachment' => ['required', 'file', 'mimes:pdf'],
            'type' => ['required', 'string'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'type' => FormTypeEnum::PORTFOLIO->value,
        ]);
    }
}
