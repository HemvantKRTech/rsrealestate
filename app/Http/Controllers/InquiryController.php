<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Mail\Toadmin;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
class InquiryController extends Controller
{
    protected $adminEmail;

    public function __construct()
    {
        // Initialize admin email from settings
        $this->adminEmail = Setting::where('id', 1)->value('email');
    }
    public function store(Request $request)
    {
        
        // Validate the request data
        $validatedData = $request->validate([
            'dynFrm_contact_person' => 'required|string|max:255',
            'dynFrm_email_id' => 'required|email|max:255',
            'dynFrm_phone' => 'required|string|max:20',
            'dynFrm_details_2' => 'required|string',
        ]);

        // Map the validated data to the model's attributes
        $mappedData = [
            'name' => $validatedData['dynFrm_contact_person'],
            'email' => $validatedData['dynFrm_email_id'],
            'mobile' => $validatedData['dynFrm_phone'],
            'description' => $validatedData['dynFrm_details_2'],
        ];

        // Create a new inquiry with the mapped data
        Inquiry::create($mappedData);

        // Redirect with success message
        return redirect()->back()->with('status', 'Inquiry submitted successfully!');
    }
    public function create(){
        return view('FrontendPages.Contact-us');
    }
    public function contactstore(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'dynFrm_name' => 'required|string|max:255',
            'dynFrm_address' => 'required|string|max:255',
            'dynFrm_e_mail' => 'required|email|max:255',
            'dynFrm_cell_ph' => 'required|string|max:20',
            'dynFrm_country' => 'required|string|max:100',
            'dynFrm_i_want_to' => 'required|string|max:255',
            'dynFrm_detail' => 'required|string',
        ]);

        // Map the validated data to the model's attributes
        $mappedData = [
            'name' => $validatedData['dynFrm_name'],
            'address' => $validatedData['dynFrm_address'],
            'email' => $validatedData['dynFrm_e_mail'],
            'phone' => $validatedData['dynFrm_cell_ph'],
            'country' => $validatedData['dynFrm_country'],
            'inquiry_type' => $validatedData['dynFrm_i_want_to'],
            'details' => $validatedData['dynFrm_detail'],
        ];
        $Data = [
        'name' => $validatedData['dynFrm_name'],
        'email' => $validatedData['dynFrm_e_mail'],
        'phone' => $validatedData['dynFrm_cell_ph'],
        'message' => $validatedData['dynFrm_detail'],
    ];

    // Send an email with the form data
    Mail::to($this->adminEmail)->send(new Toadmin($Data));
        // Create a new contact with the mapped data
        Contact::create($mappedData);

        // Redirect with a success message
        
        return redirect()->back()->with('status', 'Contact form submitted successfully!');
    }
    public function index()
    {
        // Retrieve all inquiries, with the latest first
        $Inquiry = Inquiry::latest()->paginate(10);

        return view('Admin.inquiries', compact('Inquiry'));
    }
}
