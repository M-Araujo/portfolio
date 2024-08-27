<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Log;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);


        $recipient = config('mail.from.address');

        if (!empty($recipient)) {
            Mail::to($recipient)->send(new ContactFormMail($validatedData));
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } else {
            Log::info('Error: Error in sending contact form. No recipient email address configured.');
            return redirect()->back()->with('error', 'There was an error in sending your message. Please try again later.');
        }


    }

}
