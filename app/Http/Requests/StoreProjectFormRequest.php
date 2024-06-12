<?php

namespace App\Http\Requests;

use App\Enums\FormTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'project_id' => ['required', 'exists:projects,id'],
            'type' => ['required', 'string'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'type' => FormTypeEnum::PROJECT->value,
        ]);
    }
}
