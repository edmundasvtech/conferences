<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conferences;
class ConferencesController extends Controller
{
    public function index()
    {
        $conferences = Conferences::all();
        return view('index', compact('conferences'));
    }
    public function create(){
        return view('create');
    }
    public function fill(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'location'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after:start_date',

        ]);
        Conferences::create($request->all());

        return redirect()->route('index');
    }
    public function edit($id)
    {
        $conference = Conferences::findOrFail($id);
        return view('edit', compact('conference'));
    }
    public function display($id)
    {
        $conference = Conferences::findOrFail($id);
        return view('display', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $conference = Conferences::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $conference->name = $validatedData['name'];
        $conference->description = $validatedData['description'];
        $conference->save();

        return redirect()->route('display', $conference->id);
    }
}
