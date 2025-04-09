<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories= category::all();
        return view("admin.category.index",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // check data if exit 
        $name= $request->input('name');
        if (category::where('name', $name)->exists()) {
            return redirect()->route('admin.cat.create')->with('error',$name." ".'is already registered!');
        }
        // validation for input
        $validated = $request->validate([
            'name' => 'required',
        
        ]);
        //
        $category = new category;
        $category -> name = $request->name;  
        $category ->save();
        return redirect()->route('admin.cat')->with("success","success! Data is saved ready");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $single_category = category::findOrFail($id);
        return view('admin.category.edit',compact('single_category'));
     
    }

    /**
     * Update the specified resource in storage.
     */

     public function update( Request $request, $id)
     {
       
         //
         $cat_id = category::findOrFail($id);
         $cat_id-> name = $request -> name;      
         $cat_id->update();
         return redirect()->route('admin.cat')->with("success","Data is updated successfully!");

     }
        /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)    {
        //
        $cat_id = category::findOrFail($id);    
        $cat_id->delete();
        return redirect()->route('admin.cat')->with("success","You have deleted data success!");

    }
}
