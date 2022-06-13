@extends('layouts.admin')
@section('title')
Admin-Dashboard
@endsection
@section('content')
<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body pb-0 px-4 pt-4">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="mb-1">{{ $data['totalOrderPay'] }}</h5>
                                            <span class="text-success">Total Pesanan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card bg-success	overflow-hidden">
                                <div class="card-body pb-0 px-4 pt-4">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="text-white mb-1">Rp {{number_format(Helpers::earningPerMonth())}}</h5>
                                            <span class="text-white">Total Pendapatan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-wrapper" style="width:100%">
                                    <span class="peity-line" data-width="100%">6,2,8,4,3,8,4,3,6,5,9,2</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card bg-primary overflow-hidden">
                                <div class="card-body pb-0 px-4 pt-4">
                                    <div class="row">
                                        <div class="col text-white">
                                            <h5 class="text-white mb-1">Welcome</h5>
                                            <span>{{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-wrapper px-2">
                                    <canvas id="chart_widget_2" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body px-4 py-4">
                                    <h5 class="mb-3">{{ $data['totalOrderPay'] }} <small class="text-primary">Status</small></h5>
                                    <div class="chart-point">
                                        <div class="check-point-area">
                                            <canvas id="ShareProfit2"></canvas>
                                        </div>
                                        <ul class="chart-point-list">
                                            <li><i class="fa fa-circle text-primary mr-1"></i> {{ $data['totalOrderPay'] }} Pesanan</li>
                                            <li><i class="fa fa-circle text-success mr-1"></i>Rp {{number_format(Helpers::earningPerMonth())}} Pendapatan</li>
                                            <li><i class="fa fa-circle text-warning mr-1"></i> Other </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Slowin Coffe</a> 2021</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->
    <!--**********************************
        Main wrapper end
    ***********************************-->
    @endsection
