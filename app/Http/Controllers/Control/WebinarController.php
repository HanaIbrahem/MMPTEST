<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webinar;
use Illuminate\Support\Facades\Storage;
use App\Models\Branch;
class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $branches=Branch::where('is_active', true)->latest()->get();    
        $webinars = Webinar::latest()->get();
        return view('dashbord.webinar.index', [
            'webinars' => $webinars,
            'branches'  =>$branches,
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
            'date'=>'required|date',
            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'branch_id'=>'required|exists:branches,id',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/webinars', 'public');
        }


        Webinar::create($validated);

        return redirect()->route('control.webienars.index')->with('success', 'Webinar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $webinar = Webinar::findOrFail($id);
        return view('dashbord.webinar.show', [
            'webinar' => $webinar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $webinar = Webinar::findOrFail($id);
        $branches=Branch::where('is_active', true)->latest()->get();    

        return view('dashbord.webinar.edit', [
            'webinar' => $webinar,
            'branches'=>$branches,
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
            'date'=>'required|date',
            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',
            'branch_id'=>'required|exists:branches,id',
            'image' => 'nullable|image',
        ]);

        $webinar = Webinar::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Optionally delete old image
            if ($webinar->image && \Storage::disk('public')->exists($webinar->image)) {
                \Storage::disk('public')->delete($webinar->image);
            }

            $validated['image'] = $request->file('image')->store('uploads/webinars', 'public');
        }

        $webinar->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $webinar = Webinar::findOrFail($id);
        if ($webinar->image && Storage::disk('public')->exists($webinar->image)) {
            Storage::disk('public')->delete($webinar->image);
        }

        $webinar->delete();

        return redirect()->route('control.webienars.index');
    }
    public function toggle(Webinar $webinar)
    {
        $webinar->is_active = !$webinar->is_active; // flip 1 to 0, or 0 to 1
        $webinar->save();

        return redirect()->back()->with('status', 'webinar status updated!');
    }
}
