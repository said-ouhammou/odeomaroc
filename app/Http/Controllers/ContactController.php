<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('contact@odeosystems.com')->send(new ContactFormSubmission($validated));

        // Redirect back with success message
        return back()->with('success', 'Merci pour votre message. Nous vous contacterons bientôt.');
    }
}
