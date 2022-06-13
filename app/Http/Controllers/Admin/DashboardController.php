<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $data['totalOrderPay'] = order::where('status', 'new')->count();
        return view('pages.admin.dashboard',compact('data'));
    }
}
