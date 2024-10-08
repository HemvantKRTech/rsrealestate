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
<<<<<<< HEAD
            'bedrooms' => '',
            'bathrooms' => '',
            'furnishing' => '',
            'construction_status' => '',
            'listed_by' => '',
            'super_builtup_area' => '',
            'carpet_area' => '',
            'maintenance' => '',
            'total_floors' => '',
            'floor_no' => '',
            'car_parking' => '',
            'facing' => '',
=======
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
>>>>>>> b1b89b767dd5fe8db63ebefa27a58bfb7f2f4bcc
            'project_name' => '',
            'ad_title' => '',
            'price' => 'required|numeric|min:0',
            'address' => '',
            'city' => 'required',
            'sector' => 'required',
            'hospital_distance' => '',
            'atm_distance' => '',
            'railway_distance' => '',
            'school_distance' => '',
            'airport_distance' => '',
            'bank_distance' => '',
            'description' => '',
            'images.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,mkv',
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
    \Log::info('Request Data: ', $request->all());

    $validated = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'type' => 'required|exists:property_types,id',
        'ad_title' => 'nullable|string',
        'bedrooms' => 'nullable|integer',
        'bathrooms' => 'nullable|integer',
        'furnishing' => 'nullable|string',
        'construction_status' => 'nullable|string',
        'listed_by' => 'nullable|string',
        'super_builtup_area' => 'nullable|numeric',
        'carpet_area' => 'nullable|numeric',
        'maintenance' => 'nullable|numeric',
        'total_floors' => 'nullable|integer',
        'floor_no' => 'nullable|integer',
        'car_parking' => 'nullable|integer',
        'facing' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'negotiable' => 'nullable|string',
        'images.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,mkv',
        'description' => 'nullable|string',
        'hospital_distance' => 'nullable|numeric',
        'atm_distance' => 'nullable|numeric',
        'bank_distance' => 'nullable|numeric',
        'railway_distance' => 'nullable|numeric',
        'school_distance' => 'nullable|numeric',
        'airport_distance' => 'nullable|numeric',
        'address' => 'nullable',
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

    try {
        // Use object-oriented approach to create a new Property instance
        $property = new Property();
        $property->category_id = $validated['category_id'];
        $property->type = $validated['type'];
        $property->ad_title = $validated['ad_title'];
        $property->bedrooms = $validated['bedrooms'];
        $property->bathrooms = $validated['bathrooms'];
        $property->furnishing = $validated['furnishing'];
        $property->construction_status = $validated['construction_status'];
        $property->listed_by = $validated['listed_by'];
        $property->super_builtup_area = $validated['super_builtup_area'];
        $property->carpet_area = $validated['carpet_area'];
        $property->maintenance = $validated['maintenance'];
        $property->total_floors = $validated['total_floors'];
        $property->floor_no = $validated['floor_no'];
        $property->car_parking = $validated['car_parking'];
        $property->facing = $validated['facing'];
        $property->price = $validated['price'];
        $property->negotiable = $validated['negotiable'];
        $property->images = isset($validated['images']) ? $validated['images'] : null; // Set images if available
        $property->description = $validated['description'];
        $property->hospital_distance = $validated['hospital_distance'];
        $property->atm_distance = $validated['atm_distance'];
        $property->bank_distance = $validated['bank_distance'];
        $property->railway_distance = $validated['railway_distance'];
        $property->school_distance = $validated['school_distance'];
        $property->airport_distance = $validated['airport_distance'];
        $property->address = $validated['address'];
        $property->city_id = $validated['city_id'];
        $property->sector_id = $validated['sector_id'];
        $property->user_name = $validated['user_name'];
        $property->user_email = $validated['user_email'];
        $property->user_address = $validated['user_address'];
        $property->added_by = 'user';
        $fillable = $property->getFillable();
        // dd($fillable);
        // Set only fillable properties
        foreach ($fillable as $field) {
            if (array_key_exists($field, $validated)) {
                $property->$field = $validated[$field];
            }
        }
        // Save the property
        $property->save();

        return redirect()->back()->with('success', 'Property listed successfully.');
    } catch (\Exception $e) {
        \Log::error('Error creating property: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Could not save property. Please try again.')->withInput();
    }
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
