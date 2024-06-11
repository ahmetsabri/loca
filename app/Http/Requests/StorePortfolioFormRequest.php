<?php

namespace App\Http\Requests;

use App\Enums\FormTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
            'type' => ['required', 'string'],
            'portfolio_id' => ['required','exists:portfolios,id']
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'type' => FormTypeEnum::PORTFOLIO->value,
        ]);
    }
}
