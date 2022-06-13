<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index (){
        $products = product::orderBy('id','desc')->get();
        return view('pages.shop',compact('products'));
    }
}
