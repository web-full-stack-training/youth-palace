<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProgramInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'specialPrograms-id' => '',
            'title' => 'required',
            'description' => 'required',
            'images.*' => 'required|mimes:jpeg,png,jpg|max:10000',
            'images' => 'max:6',
        ];
    }

    /**
     * @return array|string[]
     *
     * Generate errors message
     */
    public function messages(): array
    {
        return [
            'title.required' => 'title is required',
            'description.required' => 'description is required',
            'images' => 'images is required',
            'images.mimes' => ' please upload only jpeg,png,jpg',
            'images.max' => 'please upload only 6 images',
            'images.required' => 'images size is too big '
        ];
    }

    /**
     * @param Validator $validator
     *
     * Return error messages
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        $firstError = array_shift($errors);

        throw new HttpResponseException(response()->json([
            'status' => false,
            'message' => array_shift($firstError)
        ], 400));
    }
}
