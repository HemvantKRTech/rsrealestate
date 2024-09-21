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
        $currentcity= City::where('id',$id)->first();
        // dd($city);
        return view('Admin.CityFlat.EditCity',compact('currentcity'));
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
        $city=City::where('status','active')->orderBy('name','ASC')->get();
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
        $types=PropertyType::where('status','active')->get();
        $categories=Category::where('status',1)->get();
        $cities=City::where('status','active')->get();
       
        return view('Admin.PropertyList.create',compact('types','categories','cities'));
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
        $cities=City::where('status','active')->get();
        $sectors=Sector::where('status','active')->get();
        return view('Admin.PropertyList.edit', compact('property', 'types','categories','cities','sectors'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category'=>'required',
            'type' => 'required|exists:property_types,id',
            'bedrooms' => '',
            'bathrooms' => 'required|',
            'furnishing' => '',
            'construction_status' => 'required|string',
            'listed_by' => '',
            'super_builtup_area' => 'required|numeric',
            'carpet_area' => 'required|numeric',
            'maintenance' => 'nullable|numeric',
            'total_floors' => 'required|integer',
            'floor_no' => 'required|integer',
            'car_parking' => 'required|string',
            'facing' => 'nullable|string',
            'project_name' => '',
            'ad_title' => '',
            'price' => 'required|numeric',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:4096',
            'city' => 'required',
            'sector' => 'required',
            'hospital_distance' => 'required',
            'atm_distance' => 'required',
            'railway_distance' => 'required',
            'school_distance' => 'required',
            'airport_distance' => 'required',
            'bank_distance' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);

        $property = Property::findOrFail($id);
        $property->category_id = $request->input('category');
        $property->type = $request->input('type');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->furnishing = $request->input('furnishing');
        $property->construction_status = $request->input('construction_status');
        $property->listed_by = $request->input('listed_by');
        $property->super_builtup_area = $request->input('super_builtup_area');
        $property->carpet_area = $request->input('carpet_area');
        $property->maintenance = $request->input('maintenance');
        $property->total_floors = $request->input('total_floors');
        $property->floor_no = $request->input('floor_no');
        $property->car_parking = $request->input('car_parking');
        $property->facing = $request->input('facing');
        $property->project_name = $request->input('project_name');
        $property->ad_title = $request->input('ad_title');
        $property->price = $request->input('price');
        $property->address = $request->input('address');
        $property->city_id = $request->input('city');
        $property->sector_id = $request->input('sector');
        $property->hospital_distance = $request->input('hospital_distance');
        $property->atm_distance = $request->input('atm_distance');
        $property->railway_distance = $request->input('railway_distance');
        $property->school_distance = $request->input('school_distance');
        $property->airport_distance = $request->input('airport_distance');
        $property->bank_distance = $request->input('bank_distance');
        $property->description = $request->input('description');
       
        // Handle image uploads if any
        if ($request->hasFile('images')) {
            // Store uploaded images
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('property_images', 'public');
                $images[] = $path;
            }
            // Store image paths as JSON array
            $property->images = $images;
        }
        $property->save();
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
    public function updateStatus($id)
{
    // Retrieve the banner that is being updated
    $banner = Banner::findOrFail($id);
    
    // Check if the banner is currently inactive
    if (!$banner->status) {
        // If inactive, set all other banners to inactive
        Banner::where('status', 'active')->update(['status' => 'inactive']);
        
        // Set the selected banner to active
        $banner->status = 'active';
        $banner->save();

        return redirect()->back()->with('success', 'Banner is now active. All other banners are inactive.');
    }

    return redirect()->back()->with('info', 'This banner is already active.');
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

