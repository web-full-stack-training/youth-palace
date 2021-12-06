<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required|max:100',
            'email' => 'required|email|max:200',
            'message' => 'required|max:3000'
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
            'user_name.required' => 'User name field is required',
            'user_name.max' => 'User name should be less then 100 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.max' => 'Email should be less then 200 characters',
            'message.required' => 'Message is required',
            'message.max' => 'Message should be less then 3000 characters'
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
