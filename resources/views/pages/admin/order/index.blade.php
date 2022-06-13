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
                            <h4 class="card-title">All Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Order No</th>
                                            <th>Detail Order</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Quantity</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($orders as $order)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->order_number }}</td>
                                                <td>
                                                    @foreach ($order->cart_info as $detail)
                                                        <li> {{ $detail->product->title }} (Rp
                                                            {{ number_format($detail->price) }}) x{{ $detail->quantity }}
                                                        </li>
                                                    @endforeach
                                                </td>
                                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td><a class="nav-link-style"
                                                        href="tel:+{{ $order->phone }}">{{ $order->phone }}</a></td>
                                                <td>{{ $order->quantity }} </td>
                                                <td>Rp {{ number_format($order->total_amount) }}</td>
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
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('order.edit',$order->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <a href="{{route('order.show',$order->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-12">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>Total Pendapatan</h4>
                                <span>Rp {{number_format(Helpers::earningPerMonth())}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Order No</th>
                                            <th>Detail Order</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Quantity</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($pays as $order)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->order_number }}</td>
                                                <td>
                                                    @foreach ($order->cart_info as $detail)
                                                        <li> {{ $detail->product->title }} (Rp
                                                            {{ number_format($detail->price) }}) x{{ $detail->quantity }}
                                                        </li>
                                                    @endforeach
                                                </td>
                                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td><a class="nav-link-style"
                                                        href="tel:+{{ $order->phone }}">{{ $order->phone }}</a></td>
                                                <td>{{ $order->quantity }} </td>
                                                <td>Rp {{ number_format($order->total_amount) }}</td>
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
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('order.show',$order->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-eye"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
                </div>
            </div>
        </div>
    @endsection
