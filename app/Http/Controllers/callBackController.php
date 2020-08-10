<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class callBackController extends Controller{
    public function callBack(){
        return view('callback');
    }
}
