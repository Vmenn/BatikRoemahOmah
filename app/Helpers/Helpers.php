<?php

namespace App\Helpers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class Helpers{
// Cart Count
public static function cartCount($user_id=''){

    if(Auth::check()){
        if($user_id=="") $user_id=auth()->user()->id;
        return cart::where('user_id',$user_id)->where('order_id',null)->sum('quantity');
    }
    else{
        return 0;
    }
}

public static function getAllProductFromCart($user_id=''){
    if(Auth::check()){
        if($user_id=="") $user_id=auth()->user()->id;
        return Cart::with('product')->where('user_id',$user_id)->where('order_id',null)->get();
    }
    else{
        return 0;
    }
}
// Total amount cart
public static function totalCartPrice($user_id=''){
    if(Auth::check()){
        if($user_id=="") $user_id=auth()->user()->id;
        return Cart::where('user_id',$user_id)->where('order_id',null)->sum('amount');
    }
    else{
        return 0;
    }
}

// Admin home
public static function earningPerMonth(){

   $total = order::where('status', 'selesai')
            ->where('created_at', 'LIKE', '%' . date('Y-m-d') . '%')
            ->sum('total_amount');

    return $total;
}
}
