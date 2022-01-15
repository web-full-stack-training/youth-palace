<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\SendingMail;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactPageController extends Controller
{
    public function index() {
        $contact = Contact::first();
        return view('contact.contact', compact('contact'));
    }

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



