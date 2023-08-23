<?php

namespace App\Http\Controllers;
use App\Models\Import;
use App\Models\Management;
use Illuminate\Http\Request;


class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $import = Import::orderBy('created_at', 'DESC')->get();
 
        // return view('imports.index', compact('imports'));
        $imports = Import::all();
        return view('imports.index', ['imports'=>$imports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('imports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Import::create($request->all());
 
        // return redirect()->route('imports.index')->with('success', 'Ingredient added successfully');
        $import = new Import();

        $import->ingredient = $request->ingredient;
        $import->quantity_import = $request->quantity_import;
        $import->save();
        $management = new Management();
        $management->import_id = $import->id;
        $management->remain = 0;
        $management->save();
        return redirect('/imports');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $import = Import::findOrFail($id);
 
        // return view('imports.show', compact('imports'));
        $import = Import::find($id);
        return view('imports.show',['import'=>$import]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $import = Import::findOrFail($id);
 
        // return view('imports.edit', compact('imports'));
        $import = Import::find($id);
        return view('imports.edit',['import'=>$import]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $import = Import::findOrFail($id);
 
        // $import->update($request->all());
 
        // return redirect()->route('imports.index')->with('success', 'ingredient updated successfully');
        $import = Import::find($id);
        $import->ingredient = $request->ingredient;
        $import->quantity_import = $request->quantity_import;
        $import->save();
        return redirect('/imports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //     $import = Import::findOrFail($id);
 
    //     $import->delete();
 
    //     return redirect()->route('imports.index')->with('success', 'ingredient deleted successfully');
    
        $import = Import::find($id);
        $import->delete();
        return redirect('/imports');
    }
}
