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
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Send the email
        Mail::to(env('CONTACT_FORM_RECIPIENT'))->send(new ContactFormMail($validatedData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');


        /*  $to = "miriamaraujoweb@gmail.com";
          $subject = "Test Email";
          $message = "This is a test email to verify SMTP settings.";
          $headers = "From: your_email@yourdomain.com";

          // Test sending email
          if (mail($to, $subject, $message, $headers)) {
              Log::info("Email sent successfully.");
          } else {
              Log::info("Email failed.");
              //echo "Failed to send email.";
          }
  */
        //  return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }





}
