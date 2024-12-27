<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $ip = $request->ip();
        \Log::info("Contact form submission from IP: $ip");
        
        if ($request->honeypot) {
            return redirect()->back()->withErrors(['honeypot' => 'Invalid form submission']);
        }

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|regex:/^\+?[0-9\s\-\(\)]+$/|max:20',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        Contact::create($validated);
        
        // Send email
        Mail::to('contact@odeo.ma')->send(new ContactFormSubmission($validated));

        // Redirect back with success message
        // Flash success message
        session()->flash('success', 'Votre message a été envoyé avec succès.');
        return back();
    }
}
