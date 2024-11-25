<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use Illuminate\Http\Request;    
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Product;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $excels = Product::all();
        return view('excel.index', compact('excels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('excel.import-excel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');
        // iportar el archivo
        Excel::import(new ExcelImport, $file);

        return redirect()->route('excel.index')->with('success','productos importados exitosamente');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
