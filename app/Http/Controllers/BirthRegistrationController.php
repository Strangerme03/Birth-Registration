<?php

namespace App\Http\Controllers;

use App\Models\BirthRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BirthRegistrationController extends Controller
{
    public function create()
    {
        return view('birth_registration.create');
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'parent_first_name' => 'required|string|max:255',
            'parent_last_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Create a new birth registration
        $birthRegistration = BirthRegistration::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'place_of_birth' => $request->place_of_birth,
            'parent_first_name' => $request->parent_first_name,
            'parent_last_name' => $request->parent_last_name,
            'contact_email' => $request->contact_email,
            'address' => $request->address,
            'user_id' => auth()->id(),
            'token' => Str::random(32),
        ]);

        // Redirect to a success or details page
        return redirect()->route('birth_registration.show', $birthRegistration->token)
            ->with('success', 'Birth registration completed successfully!');
    }

    public function show($token)
    {
        // Fetch the birth registration using the token
        $birthRegistration = BirthRegistration::where('token', $token)->firstOrFail();

        // Return the view with the registration details
        return view('birth_registration.show', compact('birthRegistration'));
    }
}
