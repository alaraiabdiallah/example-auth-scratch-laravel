<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
        return view('register');
    }

    public function login(Request $request) {
        return view('login');
    }

    public function doRegister(Request $request) {

    }

    public function doLogin(Request $request) {

    }
}
