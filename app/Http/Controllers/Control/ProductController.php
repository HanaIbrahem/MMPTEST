<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products=Product::latest()->get();
        return view('dashbord.products.index',[
            'products'=>$products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

         $validated = $request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',

            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/products', 'public');
        }

        Product::create($validated);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product=Product::findOrFail($id);
        return view('dashbord.products.show',[
            'product'=>$product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product=Product::findOrFail($id);
        return view('dashbord.products.edit',[
            'product'=>$product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
           $validated = $request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',

            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',

            'image' => 'nullable|image',
        ]);

        $product = Product::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Optionally delete old image
            if ($product->image && \Storage::disk('public')->exists($product->image)) {
                \Storage::disk('public')->delete($product->image);
            }

            $validated['image'] = $request->file('image')->store('uploads/products', 'public');
        }

        $product->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('control.product.index');
    }
    public function toggle(Product $product)
    {
        $product->is_active = !$product->is_active; // flip 1 to 0, or 0 to 1
        $product->save();

        return redirect()->back()->with('status', 'product status updated!');
    }
}
