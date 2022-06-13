@extends('layouts.app')
@section('title')
Batik Roemah Omah-Orders
@endsection
@section('content')
    <main class="page-wrapper">
        <!-- Page Title-->
        <div class="page-title-overlap bg-dark pt-4">
            <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                        class="ci-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Orders history</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">My orders</h1>
                </div>
            </div>
        </div>
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                <!-- Sidebar-->
                <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
                    <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                        <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                            <div class="d-md-flex align-items-center">
                                <div class="ps-md-3">
                                    <h3 class="fs-base mb-0">
                                        {{ Auth::user()->name }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-block collapse" id="account-menu">
                            <div class="bg-secondary px-4 py-3">
                                <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="border-bottom mb-0"><a
                                        class="nav-link-style d-flex align-items-center px-4 py-3 active"
                                        href="{{route('shop')}}"><i class="ci-bag opacity-60 me-2"></i>Shop back<span
                                            class="fs-sm text-muted ms-auto"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- Content  -->
                <section class="col-lg-8">
                    <!-- Toolbar-->
                    <!-- Orders list-->
                    <div class="table-responsive fs-md mb-4 " style="margin-top: 70px">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date Purchased</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            @foreach ($orders as $order)
                                <tbody>
                                    <tr>
                                        <td class="py-3"><a class="nav-link-style fw-medium fs-sm"
                                                href="#order-details" data-bs-toggle="modal">{{ $order->order_number }}</a>
                                        </td>
                                        <td class="py-3">
                                            {{ Carbon\Carbon::parse($order->created_at)->format('d F Y H:i') }}</td>
                                        <td class="py-3">
                                            @if ($order->status == 'new')
                                                <span class="badge bg-primary">{{ $order->status }}</span>
                                            @elseif($order->status == 'process')
                                                <span class="badge bg-info">{{ $order->status }}</span>
                                            @elseif($order->status == 'selesai')
                                                <span class="badge bg-success">{{ $order->status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $order->status }}</span>
                                            @endif
                                            {{-- <span class="badge bg-info m-0">In Progress</span> --}}
                                        </td>
                                        <td class="py-3">Rp {{ number_format($order->total_amount) }}</td>
                                    </tr>
                                </tbody>
                            @endforeach

                        </table>
                    </div>
                    <!-- Pagination-->
                    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">

                    </nav>
                </section>
            </div>
        </div>
    </main>
@endsection
