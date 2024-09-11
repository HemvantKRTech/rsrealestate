<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Metatag;
class SettingController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        return view("Admin.setting.titlesetting",compact("setting"));
    }
    public function storeSiteTitle(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string|max:255',
        ]);

        // Assuming SiteSetting is a model handling site settings
        $setting = Setting::updateOrCreate(
           
            ['site_title' => $request->input('site_title')]
        );

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
    
}
