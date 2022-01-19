<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HalfRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'images.*' => 'required|mimes:jpeg,png,jpg|max:10000',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.string'=> 'Title is required',
            'title.required' => 'Title is required',
            'images' => 'Images is required',
            'images.mimes' => ' Please upload only jpeg,png,jpg',
        ];
    }
}
