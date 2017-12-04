<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Ideas extends Controller
{
    //
    public function index(){
        return view("ideas");
    }


}
