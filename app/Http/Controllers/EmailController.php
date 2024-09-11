<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Toadmin;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:4096',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $adminEmail = 'admin@example.com'; // Replace with the admin's email address
        Mail::to([ $adminEmail])->send(new Toadmin($validated));
        // Mail::send(['Emails.adminemail'], [ $validated], function ($message) use ($validated, $adminEmail) {
        //     $message->to($adminEmail)
        //             ->subject('New Form Submission')
        //             ->setBody(
        //                 "<h1>New Form Submission</h1>
        //                  <p><strong>Name:</strong> {$validated['name']}</p>
        //                  <p><strong>Email:</strong> {$validated['email']}</p>
        //                  <p><strong>Phone:</strong> {$validated['phone']}</p>
        //                  <p><strong>Message:</strong><br>{$validated['message']}</p>",
        //                 'text/html'
        //             )
        //             ->from($validated['email'], $validated['name']);
        // });

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
