<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserLoginRequest;

class UserController extends Controller
{
    public function login() {
        return view("user.login");
    }

    public function doLogin(UserLoginRequest $request) {

    }
}
