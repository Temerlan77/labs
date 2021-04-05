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
        //$paths = [];

        foreach ($request->file('image') as $file) {
            $paths[] = $file->store('test/images');
        }

        //dd($paths);

        return "Success!";
    }
}
