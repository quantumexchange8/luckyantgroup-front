<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Envelope;
class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
     
    }

    public function build()
    {
   
        $recipient=['support@luckyantfxgroup.com'];

       return $this
       ->from(request('email'), $this->data['name'])
        ->to($recipient) // Set the recipient's email address
       ->subject('Contact Form Submission') // Email subject
       ->view('layout.sendmail')
       ->with(['data' => $this->data]); // Pass data to the email view
    
       # return $this->from($this->data['email'], $this->data['name'])
       # ->subject('Contact Form Submission')
      #  ->view('layout.sendmail');    ->from('no-reply@mailtrap.com', $this->data['name'])
      #  ->subject('Contact Form Submission')
       # ->view('layout.sendmail');
       
    }
    public function envelope(): Envelope
    {
    return new Envelope(
  
    subject:'Form Submission',
    );
    }
}