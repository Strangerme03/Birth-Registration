<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Show the contact us form.
     */
    public function showForm()
    {
        return view('contact');
    }

    /**
     * Handle the form submission.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'emailmessage' => 'required|string|max:1000',
        ]);

        // Prepare the data to pass to the mailable
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'emailmessage' =>(string) $request->emailmessage,
        ];

        // Send the email to the admin/support
        Mail::to('sudeepkarkee4@gmail.com')->send(new ContactMail($data));

        // Redirect back with a success message
        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully.');
    }
}
