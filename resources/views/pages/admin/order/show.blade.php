@extends('layouts.admin')
@section('head_title', 'Product')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span>Muhamad Firmansyah</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Product</h4>
                        </div>
                        <div class="container-fluid" id="result">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <form action="" method="post">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td>ID Order</td>
                                                                <td>{{$order->order_number}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pemesan</td>
                                                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Masakan Dipesan</td>
                                                                <td>
                                                                    <ul>
                                                                        @foreach ($order->cart_info as $detail)
                                                                        <li> {{ $detail->product->title }} (Rp
                                                                            {{ number_format($detail->price) }}) x{{ $detail->quantity }}
                                                                        </li>
                                                                    @endforeach
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Pesanan</td>
                                                                <td>{{ Carbon\Carbon::parse($order->created_at)->format('d F Y H:i') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Pesanan</td>
                                                                <td>
                                                                    @if ($order->status == 'new')
                                                                    <span class="badge badge-primary">{{ $order->status }}</span>
                                                                @elseif($order->status == 'process')
                                                                    <span class="badge badge-warning">{{ $order->status }}</span>
                                                                @elseif($order->status == 'selesai')
                                                                    <span class="badge badge-success">{{ $order->status }}</span>
                                                                @else
                                                                    <span class="badge badge-danger">{{ $order->status }}</span>
                                                                @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Harga</td>
                                                                <td>{{number_format($order->total_amount)}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>{{$order->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone</td>
                                                                <td>{{$order->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Post Code</td>
                                                                <td>{{$order->post_code}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td>{{$order->address}}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                        </div> <!-- end container-fluid -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endsection
