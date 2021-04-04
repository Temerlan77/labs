<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show()
    {
        return view('files.upload');
    }

    public function upload(Request $request)
    {
        foreach ($request->file('image') as $file) {
            $file->store('test/images');
        }
        return "Success!";
    }
}
