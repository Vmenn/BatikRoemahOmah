<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){

        $products = product::orderBy('id','desc')->paginate(8);

        $defaults = product::where('condition','default')->orderBy('id','desc')->paginate(4);

        $news = product::where('condition','new')->orderBy('id','desc')->paginate(4);

        $hots = product::where('condition','hot')->orderBy('id','desc')->paginate(4);

        return view('pages.index',compact('products','hots','news','defaults'));
    }
}
