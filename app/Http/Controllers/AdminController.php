<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Webinar;
use App\Models\Service;
use App\Models\Product;
use App\Models\User;
class AdminController extends Controller
{
    //index page

    public function index()
    {
        $settings = Setting::whereIn('key', [
            'contact_email',
            'contact_phone',
            'contact_address',
            'contact_link',
            'social_fac',
            'social_lin'
        ])->get()->keyBy('key');

        $webinar=Webinar::count();
        $product=Product ::count();
        $service=Service::count();


        // dd($settings);
        return view('dashbord.dashbord', 
        compact('settings','webinar','product','service'));
    }


    public function update(Request $request)
    {
        $validated = $request->validate([
            'contact_email.en' => 'required|email',
            'contact_phone.en' => 'required|string',
            'contact_address' => 'required|array',

            'contact_address.en' => 'required|string',
            'contact_address.ku' => 'required|string',

            'contact_link.en' => 'required',
            'social_fac.en' => 'required',
            'social_lin.en' => 'required',
        ]);

        $keys = ['contact_email', 'contact_phone', 'contact_address', 'contact_link', 'social_fac', 'social_lin'];

        foreach ($keys as $key) {
           
            $value = $request->input($key);

           
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => json_encode($value)]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }

    // login page 
    public function login()
    {

        return view('auth.login');
    }

    //  login sesstion

    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // prevent session fixation
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'email or password invailed',
        ])->onlyInput('email');

    }


    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


}
