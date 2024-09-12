<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Toadmin;
use App\Models\Setting;

class EmailController extends Controller
{
    protected $adminEmail;

    public function __construct()
    {
        // Initialize admin email from settings
        $this->adminEmail = Setting::where('id', 1)->value('email');
    }


    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:4096',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

       
        Mail::to([ $this->adminEmail])->send(new Toadmin($validated));
        

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    public function submitEnquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:4096',
        ]);

       
        Mail::to([ $this->adminEmail])->send(new Toadmin($validated));
        

        return redirect()->back()->with('mailsuccess', 'Your message has been sent successfully.');
    }
}
