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
        //
        $category = new category;
        $category -> name = $request->name;  
        $category ->save();
        return redirect()->route('admin.cat');

    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
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
    public function update($request,$id)
    {
        //
        $cat_id = category::findOrFail($id);
        $cat_id ->name = $request->name;
        $cat_id ->update();

        return redirect()->route('admin.cat');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
