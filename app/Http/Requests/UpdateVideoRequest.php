<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVideoRequest extends FormRequest
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
            'video_category_id' => ['required', Rule::exists('video_categories', 'id')],
            'url'  => ['required','url'],
            'title' => ['required', 'array'],
            'title.tr' => ['required'],
            'title.ru' => ['required'],
            'title.en' => ['required'],

        ];
    }
}
