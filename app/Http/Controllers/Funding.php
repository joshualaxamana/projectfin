<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Funding extends Controller
{
    //
    public function index(){
        return view("funding");
    }
}
