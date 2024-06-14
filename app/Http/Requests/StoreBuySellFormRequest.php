<?php

namespace App\Http\Requests;

use App\Enums\FormTypeEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreBuySellFormRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'province' => ['required', 'string'],
            'town' => ['required', 'string'],
            'type' => ['required', 'string'],
            'message' => ['required', 'string'],
            'real_state_type' => ['required', 'string'],
            'rent_or_sell' => ['required', 'string'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'type' => FormTypeEnum::BUY_SELL->value,
        ]);
    }

    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors()->all());
    }
}
