<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DOMDocument;
use Illuminate\Support\Str;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){
        return view("Admin.Services.create");
    }
    public function deleteservice($id){
        $services = Service::find($id);
        $services->delete();
        return response()->json(['success' => true, 'message' => 'Comment deleted successfully.']);
    }
    private function handleContentImages($content)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            // If image source is base64 encoded, save it to storage
            if (preg_match('/^data:image\/(\w+);base64,/', $src)) {
                $image_type = explode('/', explode(':', substr($src, 0, strpos($src, ';')))[1])[1];
                $image_data = base64_decode(substr($src, strpos($src, ',') + 1));
                $safeName = Str::random(10) . '.' . $image_type;
                Storage::disk('public')->put('content_images/' . $safeName, $image_data);
                $img->setAttribute('src', '/storage/content_images/' . $safeName);
            }
        }

        return $dom->saveHTML();
    }
    public function create(Request $request)
    {
    //   dd($request->all());
        // Validate the incoming request data
       $validatedData= $request->validate([
            'service_name' => 'required|string|max:255',
            'slug' => 'required|string|unique:services,slug|max:255',
            'feature_image' => 'nullable|file|mimes:jpg,png,svg,gif|max:2048',
            'service_content' => 'nullable|string',
        ]);
       
        // Handle file uploads for icon and feature image
     
        $featureImagePath = $request->file('feature_image') ? $request->file('feature_image')->store('images', 'public') : null;

        // Handle content and extract images from it
        $content = $request->input('service_content');
        $service_content = $this->handleContentImages($content);
       $slug= Str::slug($request->slug);
       
        $service=Service::create([
            'service_name' =>$validatedData['service_name'],
            'slug' => $slug,
            'feature_image' => $featureImagePath,
            'service_content' =>$service_content,
           
        ]);
       
       if ($service){
        return redirect()->route('services')->with('success', 'Service created successfully.');
       }else{
        return redirect()->back()->with('error','Service is not created.');
       }

        // return redirect()->route('services')->with('success', 'Service created successfully.');
    }
    public function allservice(){
        $services = Service::all();
        return view('Admin.Services.AllServices', compact('services'));
    }
}
