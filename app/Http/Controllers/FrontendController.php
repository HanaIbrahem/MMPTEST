<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\{Product,Question,Service,Setting,Contact,Webinar};

class FrontendController extends Controller
{
    //home page
    public function index()
    {

        $products= Product::latest()->limit(4)->get();
        return view('index',[
           'products'=>$products 
        ]);
    }

    //aboute page
    public function about()
    {

        $setting = Setting::where('key', 'about_page')->first();
        return view('about',[
            'setting'=>$setting
        ]);
    }

    //services page
    public function services()
    {

        $services = Service::where('is_active', true)->latest()->get();
        return view('services',[
          'services'=>$services
        ]);
    }

      //service page show the service
      public function service(Service $service)
      {
  

          return view('service',[
            'service'=>$service
          ]);
      }

     //service page show the service
     public function products()
     {
 
        $products = Product::where('is_active', true)->latest()->get();
         return view('products',[
            'products'=>$products
         ]);
     }
     public function product(Product $product)
     {
 
         return view('product',[
            'product'=>$product
         ]);
     }

        //qustions page
    public function qustions()
    {

        $questions = Question::where('is_active', true)->latest()->get();
        return view('qustions',[
            'questions'=>$questions
        ]);
    }

    // contact page
    public function contact()
    {

        $settings = Setting::whereIn('key', [
            'contact_email',
            'contact_phone',
            'contact_address',
            'contact_link',
            'social_fac',
            'social_lin',
        ])->get()->keyBy('key');

        return view('contact',[
            'settings'=>$settings
        ]);
    }

    // stor contacts
    public function storcontact(Request $request)
    {

        $validated=$request->validate([

            'lastname'=>'required|string',
            'firstname'=>'required|string',
            'message'=>'required|string',
            'email'=>'required|email',

        ]);

        Contact::create([
            $validated
        ]);
        return redirect()->back();
    }
    // Webinars page 

    public function Webinars()
    {
        $webinars = Webinar::where('is_active', true)->latest()->get();

        return view( 'webinars',[
            'webinars'=>$webinars,
        ]);
    }
}
