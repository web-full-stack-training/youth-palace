<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FullRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string|max:210',
            'images.*' => 'mimes:jpeg,png,jpg|max:10000',
        ];
    }

    /**
     * @return array|string[]
     *
     * Generate errors message
    **/
    public function messages(): array
    {
        return [
            'title.string' => 'Title is required.',
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.',
            'description.string' => 'Description is required.',
            'images..required' => 'Images is required.',
            'images..mimes' => ' Please upload only jpeg,png,jpg.',
        ];
    }
}
