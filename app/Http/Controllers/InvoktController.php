<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoktController extends Controller
{
    /**
     * Handle the incoming request.
     */

     public function __construct(){
        $this->middleware('auth');

    }
    public function  __invoke()
    {
        return " Test Invoke Function";
    }
}
