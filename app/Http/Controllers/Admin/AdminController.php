<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Sector;
use App\Models\PropertyType;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use App\Models\Property;
class AdminController extends Controller
{
    public function index(){
        return view("Admin.dashboard");
    }
    
    public function createcity()
    {
        return view('Admin.CityFlat.createcity');
    }
    public function storecity(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);

        City::create($validatedData);

        return redirect()->route('cities.create')->with('success', 'City created successfully.');
    }
    public function allcity(){
        $cities=City::all();
        return view('Admin.CityFlat.AllCity',compact('cities'));
    }
    public function deletecity($id){
      $city=  City::find($id);
      if($city){
        City::destroy($city->id);
        return redirect()->back()->with('success','City Deleted successfully');
      }else{
        return redirect()->back()->with('error','City not found');
      }
    }
    public function editcity($id){
        $city= City::find($id);
        return view('Admin.CityFlat.EditCity',compact('city'));
    }
    public function updatecity(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive',
        ]);
        $city= City::find( $id );
        $city->name = $validatedData['name'];
        $city->status = $validatedData['status'];
        $city->save();
        return redirect()->route('cities.all')->with('success','City updated');
    }
    public function sectorform(){
        $city=City::all();
        return view('Admin.CityFlat.Sectorcreate',compact('city'));
    }
    public function sectorstore(Request $request){
        $validatedData = $request->validate([
            'city' => 'required|exists:cities,id',
            'name' => [
                'required',
                
                'max:255',
                // Check for unique sector name within the specified city
                \Illuminate\Validation\Rule::unique('sectors')->where(function ($query) use ($request) {
                    return $query->where('city_id', $request->input('city'));
                }),
            ],
            'status' => 'required|in:active,inactive',
        ]);
        Sector::create([
            'city_id' => $validatedData['city'],
            'name' => $validatedData['name'],
            'status' => $validatedData['status'], 
        ]);
        return redirect()->route('sectore.form')->with('success', 'Sector created successfully.');
    }
    public function sectorall(){
        $sector= Sector::with('city')->get();
        // dd($sector);
        return view('Admin.CityFlat.AllSector',compact('sector'));
    }
    public function destroysector($id){
        $sector=Sector::find($id);
        $sector->delete();
        return redirect()->back()->with('success','Sector deleted.');
    }
    public function editsector($id){
        $sector=Sector::with('city')->find($id);
        $cities=City::all();
        return view('Admin.CityFlat.EditSector',compact('sector'),compact('cities'));
    }
    public function updatesector($id, Request $request){
        $validatedData = $request->validate([
            'city' => 'required|exists:cities,id',
            'sectorname' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);
    
        $sector = Sector::findOrFail($id);
        $sector->update([
            'city_id' => $validatedData['city'],
            'name' => $validatedData['sectorname'],
            'status' => $validatedData['status'],
        ]);
        return redirect()->back()->with('success','Sector Updated   .');
    }
    public function propertytypecreate(){
        return view('Admin.PropertyType.create');
    }
    public function propertystore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:property_types,name',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new property type with validated data
        PropertyType::create([
            'name' => $validatedData['name'],
            'status' => $validatedData['status'],
        ]);
        return redirect()->back()->with('success','Property type created.');
    }
    public function allpropertytype(){
        $property=PropertyType::all();
        return view('Admin.PropertyType.all',compact('property'));
    }
    public function destroyproperty($id){
        $property=PropertyType::findOrFail($id);
        $property->delete();
        return redirect()->back()->with('success','Property type Deleted.');
    }
    public function propertyedit($id){
        $property=PropertyType::findOrFail($id);
        return view('Admin.PropertyType.edit',compact('property'));

    }
    public function propertyupdate(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:property_types,name,' . $id,
            'status' => 'required|in:active,inactive',
        ]);

        // Find the property type by ID
        $propertyType = PropertyType::findOrFail($id);

        // Update the property type with validated data
        $propertyType->update([
            'name' => $validatedData['name'],
            'status' => $validatedData['status'],
        ]);
        return redirect()->back()->with('success','Property type Updated.');
    }
    public function newpropertylist(){
        $type=PropertyType::all();
        $categories=Category::all();
        return view('Admin.PropertyList.create',compact('type','categories'));
    }
    public function allpropertylist(){
        $properties=Property::with('propertyType')->paginate(10);
        // dd($property);
        return view('Admin.PropertyList.all',compact('properties'));
    }

    public function propertydestroy($id){
        $property = Property::findOrFail($id);
    $property->delete(); // Delete the property

    return redirect()->route('newproperty.all')->with('success', 'Property deleted successfully.');
    }
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $types = PropertyType::where('status', 'active')->get();

        // Get all active categories
        $categories = Category::where('status', true)->get();

        return view('Admin.PropertyList.edit', compact('property', 'types','categories'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category'=>'required',
            'type' => 'required|exists:property_types,id',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'furnishing' => 'required|string',
            'construction_status' => 'required|string',
            'listed_by' => 'required|string',
            'super_builtup_area' => 'required|numeric',
            'carpet_area' => 'required|numeric',
            'maintenance' => 'nullable|numeric',
            'total_floors' => 'required|integer',
            'floor_no' => 'required|integer',
            'car_parking' => 'required|string',
            'facing' => 'nullable|string',
            'project_name' => 'required|string|max:70',
            'ad_title' => 'required|string|max:70',
            'price' => 'required|numeric',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:4096',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);

        $property = Property::findOrFail($id);
        $property->update($validated);

        // Handle image uploads if any
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_images', 'public');
                $property->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('newproperty.all')->with('success', 'Property updated successfully.');
    }
    public function addnewproject(){
        return view('Admin.Projects.create');
    }
    public function bannerindex()
    {
        $banners = Banner::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.banner.create', compact('banners'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
        ]);

        // Handle the file uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store each image
                $path = $image->store('banner_images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Create the banner
        Banner::create([
            'name' => $request->name,
            'images' => json_encode($imagePaths),
            
        ]);

        return redirect()->back()->with('success', 'Banner created successfully.');
    }

    public function destroy(Banner $banner)
    {
        // Delete images from storage
        foreach (json_decode($banner->images) as $image) {
            Storage::disk('public')->delete($image);
        }

        // Delete the banner
        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully.');
    }
    
       
}

