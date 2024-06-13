<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'department_id' => ['required', Rule::exists('departments', 'id')],
            'bio' => ['required', 'array'],
            'title' => ['required', 'array'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user?->id)],
            // 'password' => ['sometimes', 'nullable'],
            'facebook_url' => ['sometimes'],
            'instagram_url' => ['sometimes'],
            'address' => ['sometimes'],
            'office_location' => ['sometimes'],
            'experience' => ['sometimes'],
            'languages' => ['sometimes'],
            'phone' => ['required', 'string'],
            'image' => ['sometimes', 'nullable', 'image'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors()->all());
    }
}
