<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index (Request $request){

        $search = $request->get('search');
        $orders = order::where('user_id', auth()->user()->id)
            ->where('created_at', 'LIKE', '%' . date('Y-m-d') . '%')
            ->where('order_number', 'LIKE', "%$search%")->orderBy('id', 'Desc')->paginate(10);
        return view('pages.orders',compact('orders'));
    }
}
