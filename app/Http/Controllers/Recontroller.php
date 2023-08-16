<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Re;

class Recontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro = Re::orderBy('created_at', 'DESC')->get();
 
        return view('nre.index', compact('registro'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Re::create($request->all());
 
        return redirect()->route('ndoc.create')->with('success', 'registro added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = Re::findOrFail($id);
 
        return view('nre.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registro = Re::findOrFail($id);
 
        return view('nre.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $registro = Re::findOrFail($id);
 
        $registro->update($request->all());
 
        return redirect()->route('nre.index')->with('success', 'registro updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Re::findOrFail($id);
 
        $registro->delete();
 
        return redirect()->route('nre.index')->with('success', 'registro deleted successfully');
    }
}
