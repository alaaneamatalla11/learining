<?php
namespace App\Traits;

use Illuminate\Http\Request;


trait Uploadfile
{
public function Uploadfile(Request $request ,$folderName){
    $image = $request->file('image')->getClientOriginalName();
    $path = $request->file('image')->storeAs($folderName,$image,'test');
    
    return $path;

}}