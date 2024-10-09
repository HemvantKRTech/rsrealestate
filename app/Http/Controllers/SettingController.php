<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Metatag;
use App\Models\SiteNews; 
class SettingController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        return view("Admin.setting.titlesetting",compact("setting"));
    }
    public function storeSiteTitle(Request $request)
    {
        $validated = $request->validate([
            'logo'=>'required',
            'site_title' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile' => 'nullable|string|max:20',
            'calling_mobile' => 'nullable|string|max:20',
        ]);
    
        $setting = Setting::firstOrNew();
        if ($request->hasFile('logo')) {
            // Delete the previous logo if it exists
            if ($setting->logo) {
                Storage::delete('public/' . $setting->logo);
            }

            // Store the new logo and update the setting
            $path = $request->file('logo')->store('logos', 'public');
            $setting->logo = $path;
        }
        $setting->site_title = $validated['site_title'];
        

        $setting->address = $validated['address'];
        $setting->email = $validated['email'];
        $setting->mobile = $validated['mobile'];
        $setting->calling_mobile = $validated['calling_mobile'];
        $setting->save();

        return redirect()->back()->with('success', 'Site title updated successfully.');
    }
    public function meta(){
        $metaTags = MetaTag::all();
        return view("Admin.setting.metasetting", compact('metaTags'));
    }
    public function storeSiteMeta(Request $request)
    {
        // Validate the input
        $request->validate([
            'meta_tags.*.meta_name' => 'required|string|max:255',
            'meta_tags.*.meta_content' => 'required|string',
        ]);
        MetaTag::truncate();
        // Loop through each meta tag input and update or create the meta tag
        foreach ($request->meta_tags as $metaTag) {
            MetaTag::updateOrCreate(
                ['meta_name' => $metaTag['meta_name']],
                ['meta_content' => $metaTag['meta_content']]
            );
        }

        return redirect()->back()->with('success', 'Meta tags saved successfully.');
    }

    public function news(){
        $newsItems = SiteNews::all(); 
        return view("Admin.setting.news", compact('newsItems'));
    }
    public function storenews(Request $request){
        $request->validate([
            'news' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new record in the sitenews table
        SiteNews::create([
            'news' => $request->input('news'),
            'status' => $request->input('status') === 'active' ? 'active' : 'inactive', // Convert to enum value
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('message', 'News saved successfully!');
    }
    public function toggleStatus($id)
{
    $news = SiteNews::findOrFail($id);
    $news->status = $news->status === 'active' ? 'inactive' : 'active';
    $news->save();

    return redirect()->back()->with('message', 'News status updated successfully!');
}

public function deleteNews($id)
{
    $news = SiteNews::findOrFail($id);
    $news->delete();

    return redirect()->back()->with('message', 'News deleted successfully!');
}
    
}
