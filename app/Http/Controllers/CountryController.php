<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Contact;
class CountryController extends Controller
{
    public function index()
    {
        // $countries = Country::all();
        return view('layout.contactus');
    }
  /*  public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'interest' => 'required|string',
            'message' => 'nullable|string',
        ]);
    
        try {
            // Attempt to store the contact in the database
            Contact::create($request->all());
    
            // Display a success message using SweetAlert
            return redirect()->route('contact')->with('success', 'Contact form submitted successfully!');
        } catch (\Exception $e) {
            // If an exception occurs (e.g., database error), show an error message
            return redirect()->route('contact')->with('error', 'Error submitting the contact form. Please try again.');
        }
    } */
}