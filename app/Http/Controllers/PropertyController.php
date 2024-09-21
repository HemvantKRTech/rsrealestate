<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;
use App\Models\Sector;
use App\Models\PropertyType;
class PropertyController extends Controller
{
    public function create()
    {
        $types=PropertyType::where('status','active')->get();
        $categories=Category::where('status',1)->get();
        $cities=City::where('status','active')->get();
       
        return view('FrontendPages.postproperty',compact('types','categories','cities'));
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
            'project_name' => '',
            'ad_title' => '',
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
        $sectors = Sector::where('city_id',$cityId)->get();
        // Fetch properties based on the city ID
        $properties = Property::where('city_id', $cityId)->get();
        // dd($properties);
        // Pass properties and city data to the view
        return view('FrontendPages.property-mohali', [
            'properties' => $properties,
            'city' => $cityname,
            'sectors'=> $sectors
        ]);
    }
    public function sectorshow($sectorname)
    {
        // Fetch the city based on cityname
        $sector = Sector::where('name', $sectorname)->firstOrFail();

        // Get the city ID
        $sectorId = $sector->city_id;
        $sectormainid= $sector->id;
     
        $category=Category::where('status', 1)->withCount('property')->get();
        $sector=Sector::where('city_id', $sectorId)->withCount('properties')->get();
        // dd($sector);
        // Fetch properties based on the city ID
        $properties = Property::where('sector_id', $sectormainid)->with('city')->get();
        $city=City::where('status', 'active')->withCount('property')->get();
        $cityId=$sector['0']->city_id;
    $singlecity=City::find($cityId);
    
        return view('FrontendPages.sector_property_details', [
            'properties' => $properties,
            'sector' => $sector,
            'category'=> $category,
            'city'=> $city,
            'singlecity'=> $singlecity
        ]);
    }
    public function propertydetail($id){
       $property= Property::where('id', $id)->with('city')->with('sector')->firstOrFail();
       $cityid=$property->city_id;
       $relatedProperty=Property::where('city_id', $cityid)->get();
       return view('FrontendPages.property_details', [
        'property'=> $property,
        'relatedProperty'=> $relatedProperty
        ]);
    }
    public function catproshow($name){
        
        $properties = Property::where('category_id', $name)->with('city')->get();
        $category=Category::where('status', 1)->withCount('property')->get();
        $cityId=$properties['0']->city_id;
    $singlecity=City::find($cityId);
    $sector=Sector::where('city_id', $cityId)->withCount('properties')->get();
    $allcity=City::where('status', 'active')->withCount('property')->get();
    return view('FrontendPages.category_properties', [
        'properties' => $properties,
        'sector' => $sector,
        'category'=> $category,
        'city'=> $allcity,
        'singlecity'=> $singlecity
    ]);
    }
    public function getSectorsByCitys($cityId)
    {
        $sectors = Sector::where('city_id', $cityId)->get(['id', 'name']);
        return response()->json($sectors);
    }
    public function frontendstore(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|exists:property_types,id',
            'ad_title' => 'required',
            'bedrooms' => 'required|',
            'bathrooms' => 'required|',
            'furnishing' => 'required|',
            'construction_status' => 'required|string',
            'listed_by' => 'required|string',
            'super_builtup_area' => 'required|numeric|min:0',
            'carpet_area' => 'required|numeric|min:0',
            'maintenance' => 'nullable|numeric|min:0',
            'total_floors' => 'required|min:0',
            'floor_no' => 'required|integer|min:0',
            'car_parking' => 'required|string',
            'facing' => 'required|string',
            'price' => 'required|numeric|min:0',
            'negotiable' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'hospital_distance' => 'required|numeric|min:0',
            'atm_distance' => 'required|numeric|min:0',
            'bank_distance' => 'required|numeric|min:0',
            'railway_distance' => 'required|numeric|min:0',
            'school_distance' => 'required|numeric|min:0',
            'airport_distance' => 'required|numeric|min:0',
            'address' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'sector_id' => 'required|exists:sectors,id',
            'user_name' => 'required|string|max:90',
            'user_email' => 'required|email|max:90',
            'user_address' => 'required|string',
        ]);
       
    
        // Handle file uploads
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];
            foreach ($images as $image) {
                $path = $image->store('property_images', 'public');
                $imagePaths[] = $path;
            }
            $validated['images'] = json_encode($imagePaths); // Store paths as JSON
        }

        // Create a new property record
       $n= Property::create($validated);
        if ($n) {
            return redirect()->back()->with('success', 'Property listed successfully.');
        }
        // Redirect or return a response
        
    }
    public function search(Request $request)
{
    // Get all input data from the search form
    $query = Property::query();

    // Filter by category (I Want to)
    if ($request->filled('want_to')) {
        $query->where('category_id', $request->input('want_to'));
    }

    // Filter by property type
    if ($request->filled('property_type')) {
        $query->where('type_id', $request->input('property_type'));
    }

    // Filter by city
    if ($request->filled('city_id')) {
        $query->where('city_id', $request->input('city_id'));
    }

    // Filter by sector
    if ($request->filled('sector_id')) {
        $query->where('sector_id', $request->input('sector_id'));
    }

    // Filter by sell price (Min and Max)
    if ($request->filled('sell_price_from')) {
        $query->where('price', '>=', $request->input('sell_price_from') * 100000); // Convert lacs to actual amount
    }
    if ($request->filled('sell_price_to')) {
        $query->where('price', '<=', $request->input('sell_price_to') * 100000);
    }

    // Filter by rent price (Min and Max)
    if ($request->filled('rent_price_from')) {
        $query->where('rent_price', '>=', $request->input('rent_price_from') * 1000); // Convert thousands to actual amount
    }
    if ($request->filled('rent_price_to')) {
        $query->where('rent_price', '<=', $request->input('rent_price_to') * 1000);
    }

    // Execute the query to get the results
    $properties = $query->get();
    
    // Return the results to a view
    return view('FrontendPages.search-property', compact('properties'));
}

}
