<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;
use App\Models\Sector;
class PropertyController extends Controller
{
    public function create()
    {
        
        return view('FrontendPages.postproperty');
    }

    public function store(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'category'=>'required',
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'furnishing' => 'required',
            'construction_status' => 'required',
            'listed_by' => 'required',
            'super_builtup_area' => 'required|numeric|min:0',
            'carpet_area' => 'required|numeric|min:0',
            'maintenance' => 'required|numeric|min:0',
            'total_floors' => 'required|numeric|min:0',
            'floor_no' => 'required|numeric|min:0',
            'car_parking' => 'required',
            'facing' => 'required',
            'project_name' => 'required|max:70',
            'ad_title' => 'required|max:70',
            'price' => 'required|numeric|min:0',
            'address' => 'required|max:255',
            'city' => 'required',
            'sector' => 'required',
            'hospital_distance' => 'required',
            'atm_distance' => 'required',
            'railway_distance' => 'required',
            'school_distance' => 'required',
            'airport_distance' => 'required',
            'bank_distance' => 'required',
            'description' => 'required|max:4096',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate each image
        ]);
    
        // Store the form data into the database
        $property = new Property();
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
    
        // Handle image uploads
        if ($request->hasFile('images')) {
            $imageFiles = $request->file('images');
            $imagePaths = [];
    
            foreach ($imageFiles as $image) {
                // Store each image in the property_images folder and get its path
                $imagePath = $image->store('property_images', 'public');
                $imagePaths[] = $imagePath;
            }
    
            // Save the array of image paths as a JSON string in the 'images' column
            $property->images = json_encode($imagePaths);
        }
    
        $property->save();
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Property listed successfully.');
    }
    
    public function categorycreate( Request $request){
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);

    // Check if 'edit' query parameter is present
    $editCategory = null;
    if ($request->has('edit')) {
        $editCategory = Category::find($request->edit);
    }

    return view('Admin.category.create', compact('categories', 'editCategory'));
    }
    public function categorystore(Request $request){
        {
            // Validate the request data
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:categories,name',
                'status' => 'required|boolean',
            ]);
    
            // Create the category
            Category::create($validated);
    
            // Redirect with success message
            return redirect()->back()->with('success', 'Category created successfully.');
        }
    }
    public function categoryupdate(Request $request, Category $category)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'status' => 'required|boolean',
        ]);

        // Update the category
        $category->update($validated);

        // Redirect with success message
        return redirect()->route('category.create')->with('success', 'Category updated successfully.');
    }

    // Delete a category
    public function categorydestroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Redirect with success message
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
    public function getSectorsByCity(Request $request)
    {
        $city_id = $request->city_id;
        $sectors = Sector::where('city_id', $city_id)->pluck('name', 'id');
        return response()->json($sectors);
    }
    public function show($cityname)
    {
        // Fetch the city based on cityname
        $city = City::where('name', $cityname)->firstOrFail();

        // Get the city ID
        $cityId = $city->id;

        // Fetch properties based on the city ID
        $properties = Property::where('city_id', $cityId)->get();
        // dd($properties);
        // Pass properties and city data to the view
        return view('properties.index', [
            'properties' => $properties,
            'city' => $city
        ]);
    }
    public function sectorshow($sectorname)
    {
        // Fetch the city based on cityname
        $city = Sector::where('name', $sectorname)->firstOrFail();

        // Get the city ID
        $cityId = $city->id;

        // Fetch properties based on the city ID
        $properties = Property::where('sector_id', $cityId)->get();
        dd($properties);
        // Pass properties and city data to the view
        return view('properties.index', [
            'properties' => $properties,
            'city' => $city
        ]);
    }
    public function propertydetail($id){
       $property= Property::where('id', $id)->with('city')->with('sector')->firstOrFail();
       return view('FrontendPages.property_details', [
        'property'=> $property
        ]);
    }

}
