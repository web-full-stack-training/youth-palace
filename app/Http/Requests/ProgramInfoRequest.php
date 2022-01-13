<?php

namespace App\Http\Requests;

use http\Env\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Session;

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
            'special_programs_id' => '',
            'title' => 'required|string',
            'description' => 'required|string',
            'images.*' => 'mimes:jpeg,png,jpg|max:10000',
            'images' => 'max:6'
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
            'title.string' => 'Title is required.',
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.',
            'description.string' => 'Description is required.',
            'images.*.required' => 'Images is required.',
            'images.*.mimes' => ' Please upload only jpeg,png,jpg.',
            'images.*.max' => 'Images size is too big.',
            'images.max' => 'Please upload only 6 images.'
        ];
    }

}
//
//    /**
//     * @param Validator $validator
//     *
//     * Return error messages
//     */
//    protected function failedValidation(Validator $validator)
//    {
//        $errors = $validator->errors()->toArray();
//        $firstError = array_shift($errors);
//        if (!$firstError)
//        {
//            Session::flash('errors', 'Wrong credentials.');
//            return redirect()->back();
//        }
//    }
//}
//
//
////         new HttpResponseException(response()->json([
////            'status' => false,
////            'message' => array_shift($firstError)
////        ], 400));
