<?php

namespace App\Http\Controllers;

use App\Models\tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
       $tags =tags::all();
       return view('admin.tags.index', compact('tags'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
        
        ]);
         $tag = new tags;
         $tag ->name = $request->name;
         $tag ->save();
         return redirect()->route('admin.tags');
    }

    /**
     * Display the specified resource.
     */
    public function show(tags $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      
        $tag = tags::FindOrFail($id);
        return view('admin.tags.edit',compact('tag'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $tag = tags::FindOrFail($id);
        $tag->name = $request->name;
        $tag->update();
        return redirect()->route('admin.tags')->with("success","Data is updated succesfully!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)  
    {
        //
        $tag = tags::findOrFail($id);    
        $tag->delete();
        return redirect()->route('admin.tags')->with("success","You have deleted data success!");

    }
}
