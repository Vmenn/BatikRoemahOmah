@extends('layouts.admin')
@section("head_title", "Product")
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


        <div class="container-fluid" id="result">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20" >
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Data Statistik Toko</h4>
                            <p class="text-muted m-b-30 font-14">Berikut adalah rekap seluruh data</p>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Total Pengguna</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    {{$data['totalUser']}} Pengguna:
                                                    <ul>
                                                        <li>{{ $data['totalPelanggan'] }} Pelanggan</li>
                                                        <li>{{ $data['totalAdmin'] }} Admin</li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </td>
                                        <td><a href='{{ route('user.index') }}'><i class='ti ti-eye'></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Total Pesanan</td>
                                        <td>
                                            <ul>
                                            <li>{{ $data['totalOrder'] }} Order:
                                                <ul>
                                                    <li>{{ $data['totalOrderProcessing'] }} Processing</li>
                                                    <li>{{ $data['totalOrderPay'] }} Bayar</li>
                                                    <li>{{ $data['totalOrderSuccess'] }} Sukses</li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </td>
                                        <td><a href='{{ route('order.index') }}'><i class='ti ti-eye'></i> Lihat</a></td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Total Meja</td>
                                        <td>{{ $data['totalMeja'] }} Meja</td>
                                        <td><a href='#'><i class='ti ti-eye'></i> Lihat</a></td>
                                    </tr> --}}
                                    <tr>
                                        <td>Total Menu</td>
                                        <td>{{ $data['totalMasakan'] }} Menu</td>
                                        <td><a href='{{ route('product.index') }}'><i class='ti ti-eye'></i> Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan</td>
                                        <td> Rp {{number_format(Helpers::earningPerMonth())}}</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- end container-fluid -->
                </div>
            </div>
            @endsection
