<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcellController extends Controller
{
    public function index()
    {
        return view('excel');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

           
            dd($file);

           
        } else {
          
            return response()->json(['error' => 'No file uploaded'], 400);
        }
    }
}
