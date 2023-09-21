<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\Uploadfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadImages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Uploadfile;
    public function ShowForm()
    {
        return View('upload.images');
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

       $path =  $this->Uploadfile($request, 'DS-images');
       Image::create([

        'path' => $path
       ]);
       return "Image Uplpded";



        // $uniqueFileName = uniqid() . $request->get('image')->getClientOriginalName() . '.' . $request->get('image')->getClientOriginalExtension();
        // $request->get('image')->move(public_path('tests') . $uniqueFileName);
        // // dd($request);
        //    return redirect()->back()->with('success', 'File uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */

    
    
    public function show()
    {
        $images=Image::all();
        return view ('upload.index',compact ('images'));
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
