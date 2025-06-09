<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::latest()->get();
        return view('dashbord.service.index', [
            'services' => $services,
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
            $validated['image'] = $request->file('image')->store('uploads/services', 'public');
        }

        Service::create($validated);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $service = Service::findOrFail($id);
        return view('dashbord.service.show', [
            'service' => $service,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $service = Service::findOrFail($id);
        return view('dashbord.service.edit', [
            'service' => $service,
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

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $service = Service::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = $request->file('image')->store('uploads/services', 'public');
        }

        $service->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service = Service::findOrFail($id);
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('control.service.index');
    }

    public function toggle(Service $service)
    {
        $service->is_active = !$service->is_active; // flip 1 to 0, or 0 to 1
        $service->save();

        return redirect()->back()->with('status', 'service status updated!');
    }
}
