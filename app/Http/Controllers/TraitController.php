<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\TestTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class TraitController extends Controller
{ use TestTrait;
   public function index (){

        $users = $this->getData(new User());

        return $users;

    
   }
   public function comment (){

    $comments = $this->getData(new Comment());

    return $comments;


}
}
