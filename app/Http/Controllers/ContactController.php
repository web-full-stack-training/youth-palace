<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Save user message.
     *
     * @param ContactFormRequest $request
     * @return JsonResponse
     */
    public function saveContactMessage(ContactFormRequest $request): JsonResponse
    {
        $inputs = $request->validated();

        Contact::create([
            'from_user' => $inputs['user_name'],
            'from_email' => $inputs['email'],
            'message' => $inputs['message']
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Your message sent successfully'
        ]);
    }
}
