<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
class QustionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $questions=Question::all();
        return view('dashbord.qustion.index',['questions'=>$questions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        dd($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $validated = $request->validate(rules: [
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',

            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',

        ]);
        Question::create(attributes: $validated);
        return redirect()->back();
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $question=Question::findOrFail($id);
        return view('dashbord.qustion.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $question=Question::findOrFail($id);
        return view('dashbord.qustion.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $question=Question::findOrFail($id);
           $validated = $request->validate(rules: [
            'title' => 'required|array',
            'title.en' => 'required|string',
            'title.ku' => 'required|string',

            'content' => 'required|array',
            'content.en' => 'required|string|min:10|max:30000',
            'content.ku' => 'required|string|min:10|max:30000',

        ]);
        $question->update(attributes: $validated);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $question=Question::findOrFail($id);
        $question->delete();
        return redirect()->route('control.qustions.index');
    }

    public function toggle(Question $question)
    {
       $question->is_active = !$question->is_active; // flip 1 to 0, or 0 to 1
    $question->save();

    return redirect()->back()->with('status', 'Question status updated!');
    }
}
