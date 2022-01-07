<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Session;

class EditAccountRequest extends FormRequest
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
            'username' => 'required',
            'current_password' => 'required',
            'password' => 'required|confirmed|min:6',
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
            'username.required' => 'User name field is required.',
            'current_password.required' => 'Current password field is required.',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password does not match.',
            'password.min' => 'Password should be more than 6 characters.',
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
        Session::flash('error', array_shift($firstError));
        return redirect()->back();
    }
}
