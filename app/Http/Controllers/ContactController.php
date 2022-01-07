<?php

namespace App\Http\Controllers;
use App\Mail\SendingMail;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Message::create([
            'from_user' => $inputs['user_name'],
            'from_email' => $inputs['email'],
            'message' => $inputs['message']
        ]);

        Mail::to($inputs['email'])->send(new SendingMail($inputs['user_name']));

        return response()->json([
            'status' => true,
            'message' => 'Your message sent successfully'
        ]);
    }
}
