<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required', 'unique:authors,name',
            'photo' => 'mimes:png,jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Author name can't be empty",
            'name.unique' => "Author with this name already exist",
            'photo.mimes' => "Image must be either 'JPG','JPEG' or 'PNG'.",
        ];
    }
}