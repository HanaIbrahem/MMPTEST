<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\{Product, Question, Service, Setting, Contact, Webinar};
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //home page
    public function index()
    {

        $products = Product::latest()->limit(4)->get();
        return view('index', [
            'products' => $products
        ]);
    }

    //aboute page
    public function about()
    {

        $setting = Setting::where('key', 'about_page')->first();
        return view('about', [
            'setting' => $setting
        ]);
    }

    //services page
    public function services()
    {

        $services = Service::where('is_active', true)->latest()->get();
        return view('services', [
            'services' => $services
        ]);
    }

    //service page show the service
    public function service(Service $service)
    {


        return view('service', [
            'service' => $service
        ]);
    }

    //service page show the service
    public function products()
    {

        $products = Product::where('is_active', true)->latest()->get();
        return view('products', [
            'products' => $products
        ]);
    }
    public function product(Product $product)
    {

        return view('product', [
            'product' => $product
        ]);
    }

    //qustions page
    public function qustions()
    {

        $questions = Question::where('is_active', true)->latest()->get();
        return view('qustions', [
            'questions' => $questions
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

        return view('contact', [
            'settings' => $settings
        ]);
    }

    // stor contacts
    public function storcontact(Request $request)
    {

        $validated = $request->validate([

            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'message' => 'required|string',
            'email' => 'required|email',

        ]);

        Contact::create([
            $validated
        ]);
        return redirect()->back();
    }
    // Webinars page 

    public function Webinars(Request $request)
    {
       
        $webinars = Webinar::with('branch')
        ->where('is_active', true)
        ->latest()
        ->paginate(9); // Paginate with 9 items per page

    $minYear = DB::table('webinars')
        ->selectRaw("strftime('%Y', date) as year")
        ->orderBy('date')
        ->limit(1)
        ->value('year') ?? now()->year;

    $currentYear = now()->year;
    $years = range($minYear, $currentYear);

    $branches = Branch::where('is_active', true)
        ->latest()
        ->get();

    if ($request->ajax()) {
        return response()->json([
            'webinars' => view('partials.webinar-cards', compact('webinars'))->render(),
            'pagination' => $webinars->links()->toHtml()
        ]);
    }

    return view('webinars', [
        'webinars' => $webinars,
        'years' => $years,
        'branches' => $branches
    ]);
    
    }

    public function filter(Request $request)
    {

         $query = Webinar::with('branch')->where('is_active', true);

    if ($request->has('search') && !empty($request->search)) {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    if ($request->has('year') && !empty($request->year)) {
        $query->whereYear('date', $request->year);
    }

    if ($request->has('branch') && !empty($request->branch)) {
        $query->where('branch_id', $request->branch);
    }

    $webinars = $query->latest()->paginate(9);

    return response()->json([
        'webinars' => view('partials.webinar-cards', compact('webinars'))->render(),
        'pagination' => $webinars->links()->toHtml()
    ]);

    }

    public function Webinar(Webinar $webinar)
    {

        return view('webinar', [
            'webinar' => $webinar
        ]);
    }
}
