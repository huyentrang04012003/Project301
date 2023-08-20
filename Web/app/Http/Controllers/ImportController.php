<?php

namespace App\Http\Controllers;
use App\Models\Import;
use Illuminate\Http\Request;


class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $import = new Import();
        $import->name = $request->name;
        $import->save();
        return redirect('/imports');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $import = Import::find($id);
        return view('imports.show',['import'=>$import]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $import = Import::find($id);
        return view('imports.edit',['import'=>$import]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $import = Import::find($id);
        $import->name = $request->name;
        $import->save();
        return redirect('/imports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $import = Import::find($id);
        $import->delete();
        return redirect('/imports');
    }
}
