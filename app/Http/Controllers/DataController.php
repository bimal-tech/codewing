<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|mimes:.json'
        ]);
        $file = $request->file;
        $file_name = time() . '.json';
        $file->move(public_path('data/'), $file_name);
        $excelFileName = 'data.xlsx';
        return Excel::download(new DataExport("data/$file_name"), $excelFileName);
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
