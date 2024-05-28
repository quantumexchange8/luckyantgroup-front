<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{ 
    public function submitForm(Request $request)
    {
        // Validate and process form data

    
        // $data = [
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'country' => $request->input('country'),
        //     'interest' => $request->input('interest'),
        //     'message' => $request->input('message'),
        // ];

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required|string',
            'interest' => 'required|string',
            'message' => 'required|string',
        ]);
  
        // Mail::send(new ContactFormMail($data));

        Mail::send('emails.contact', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to('support@luckyantfxgroup.com')->subject('Lucky Ant Form Submission');

            $message->from($validatedData['email'], $validatedData['name']);
        });

     //   Mail::send(new \App\Mail\ContactFormMail($data));
        return redirect()->back()->with('success', 'Message sent successfully!');
      
    
    }
    


   
}
