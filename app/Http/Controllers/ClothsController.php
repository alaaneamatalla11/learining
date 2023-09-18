<?php

namespace App\Http\Controllers;

use App\Models\Cloths;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClothsController extends Controller
{
    public function user (){

        $cloth=Cloths::find(1);
        return $cloth->user;
    }
}
