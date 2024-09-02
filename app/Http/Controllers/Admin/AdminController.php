<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Sector;
use App\Models\PropertyType;
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
                'string',
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
            'name' => $validatedData['sectorname'],
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
        return view('Admin.PropertyList.create');
    }

    
       
}

