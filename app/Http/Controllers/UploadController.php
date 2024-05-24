<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }


    public function uploadFile(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:xls,xlsx|max:5000', // Validate file type (.xls, .xlsx) and size (up to 2048 KB)
    ]);

    $file = $request->file('file');

    // Save the file to the storage directory
    $path = $file->store('uploads');

    // Optionally, you can also save file details to the database

    return back()->with('success', 'File uploaded successfully.');
}

}
