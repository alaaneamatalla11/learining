<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\TestTrait;
use App\Jobs\StatusUsersJob;

class UserController extends Controller
{
    public function phone()
    {

        $user = User::find(1);
        return $user->phone;
    }
    public function cloth()
    {

        $user = User::find(1);
        return $user->cloth;
    }
    public function roles()
    {

        $user = User::find(2);
        return $user->roles;
    }
    public function status()
    {
        $user_idS = User::where('status', 0)->pluck('id');
        StatusUsersJob::dispatch($user_idS);
        return ('PROCESS WORKING');
    }
}
