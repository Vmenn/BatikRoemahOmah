<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContachController extends Controller
{
    public function index (){
        return view('pages.contacts');
    }
}
