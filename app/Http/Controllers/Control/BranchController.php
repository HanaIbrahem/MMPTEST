<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $branches=Branch::all();
        return view('dashbord.branch.index',[
            'branches'=>$branches
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

        $validate=$request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',
        ]);


        Branch::create($validate);
        return redirect()->back();        
        
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $branch=Branch::findOrFail($id);
        return view('dashbord.branch.show',[
            'branch'=>$branch,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        //
        $branch=Branch::findOrFail($id);
        return view('dashbord.branch.edit',[
            'branch'=>$branch,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $validate=$request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',
        ]);

        $branch=Branch::findOrFail($id);
        $branch->update($validate);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $branch=Branch::findOrFail($id);
        $branch->delete();
        
        return redirect()->back();
    }

    // toggle 
    public function toggle(Branch $branch)
    {
        $branch->is_active = !$branch->is_active; // flip 1 to 0, or 0 to 1
        $branch->save();

        return redirect()->back();
    }
}
