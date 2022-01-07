<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {

        $contact = Contact::first();
        $count = Contact::count();
        return view('admin.contact.show', compact('contact'));
    }

    public function showCreateForm()
    {
        return view('admin.contact.create');
    }
    public function addContactInfo(Request $request)
    {
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');

        Contact::create([
            'email' => $email,
            'telephone' => $telephone,
            'phone_number' => $phone_number,
            'address' => $address
        ]);
        return redirect()->route('contact');
    }
    public function showEditForm($id)
    {
        $contactData = Contact::find($id);
        return view('admin.contact.edit', compact('contactData'));
    }
    public function editContactInfo(Request $request)
    {
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');

        $id = $request->input('contact-id');

        Contact::where('id', $id)->update(
            [
                'email' => $email,
                'telephone' => $telephone,
                'phone_number' => $phone_number,
                'address' => $address
            ]
        );
        return redirect()->route('contact');
    }
    public function showContactPage() {
        return view('contact.contact');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteContact(Request $request): JsonResponse
    {
        $contactId = $request->input('contact_id');
        Contact::where('id', $contactId)->delete();

        return response()->json([
            'message' => 'Media deleted successfully'
        ]);
    }
}
