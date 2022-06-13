<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $data['totalUser'] = User::count();
        $data['totalAdmin'] = User::where('level_id', 1)->count();
        $data['totalPelanggan'] = User::where('level_id', 2)->count();
        $data['totalMasakan'] = product::count();
        $data['totalOrder'] = order::count();
        $data['totalOrderSuccess'] = Order::where('status', 'selesai')->count();
        $data['totalOrderProcessing'] = Order::where('status', 'process')->count();
        $data['totalOrderPay'] = Order::where('status', 'new')->count();
        return view('pages.admin.laporan.index',compact('data'));
    }
}
