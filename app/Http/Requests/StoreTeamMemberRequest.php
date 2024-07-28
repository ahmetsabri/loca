<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StoreTeamMemberRequest extends FormRequest
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
            'bio' => ['nullable', 'array'],
            'title' => ['nullable', 'array'],
            'ttype_no' => ['nullable'],
            'email' => ['nullable', 'email', Rule::unique('users', 'email')->ignore($this->user()->id)],
            'password' => ['required'],
            'facebook_url' => ['sometimes'],
            'instagram_url' => ['sometimes'],
            'address' => ['sometimes'],
            'office_location' => ['sometimes'],
            'experience' => ['sometimes'],
            'languages' => ['sometimes'],
            'phone' => ['nullable', 'string'],
            'image' => ['required', 'image'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'password' => Str::random((10)),
        ]);
    }
}
