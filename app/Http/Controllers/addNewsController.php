<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addNewsController extends Controller{
    public function addNews(){
        return view('addNews');
    }
}
