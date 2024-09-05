<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
class PropertyController extends Controller
{
    public function create()
    {
        return view('FrontendPages.postproperty');
    }

    public function store(Request $request)
    {
        $validateData=$request->validate([
            'dynFrm_property_for' => 'required',
            'dynFrm_property_category' => 'required',
            'dynFrm_area' => 'required',
            'dynFrm_unit_measure' => 'required',
            'dynFrm_price' => 'required|numeric',
            'dynFrm_property_description' => 'required',
            'property_dynFrm_address' => 'required',
            'property_dynFrm_city' => 'required',
            'property_dynFrm_city_state_2' => 'required',
            'dynFrm_your_name' => 'required',
            'personal_dynFrm_email_id' => 'required|email',
            'personal_dynFrm_address' => 'required',
            'personal_dynFrm_city_state' => 'required',
            'personal_dynFrm_country_2' => 'required',
            'personal_dynFrm_phone_mobile' => 'required',
            'dynFrm_property_image_file' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        dd($validateData);

        if ($request->hasFile('dynFrm_property_image_file')) {
            $path = $request->file('dynFrm_property_image_file')->store('property_images');
            $validateData['dynFrm_property_image_file']=$path;
        }
       

        Property::create($validateData);

        return redirect()->route('property.create')->with('success', 'Property posted successfully!');
    }
}
