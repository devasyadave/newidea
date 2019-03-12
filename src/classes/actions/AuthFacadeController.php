<?php

namespace MiniOrange\Classes\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class AuthFacadeController extends Controller
{ 
    public function signin() {
        $user = new User();
        $user->email = "devasyadave@gmail.com";
        $user->id = "1";
        Auth::login($user, true);
    }
}

