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
       return view('admin.tags.index');

        
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
        // $tag = new tags;
        dd($request->name);
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
    public function edit(tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tags $tags)
    {
        //
    }
}
