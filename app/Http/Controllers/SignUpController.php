<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller{
    public function auth(){
        return view('auth.index');
    }
    public function register(){
        return view('auth.register');
    }
    public function forgotPass(){
        return view('auth.forgotPass');
    }
}
