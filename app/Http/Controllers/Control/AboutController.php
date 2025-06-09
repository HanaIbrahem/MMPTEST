<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class AboutController extends Controller
{
    //

    public function index()
    {
        $setting = Setting::where('key', 'about_page')->first();
        return view('dashbord.about', compact('setting'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'about_page' => 'required|array',
            'about_page.en' => 'required|string|min:10|max:30000',
            'about_page.ku' => 'required|string|min:10|max:30000',
        ]);



        $settings=Setting::where('key','about_page')->first();
        $settings->value=$validated['about_page'];
        $settings->save();

        // Setting::updateOrCreate(
        //     ['key' => 'about_page'],
        //     ['value' => json_encode($validated['about_page'])]
        // );

        return redirect()->back()->with('success', 'About page updated.');
    }

}
