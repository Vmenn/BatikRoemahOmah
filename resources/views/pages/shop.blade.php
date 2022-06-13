@extends('layouts.app')
@section('title')
Batik Roemah Omah-Shop
@endsection
@section('content')
<!-- Body-->


<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <main class="page-wrapper">
        <!-- Page Title (Shop Alt)-->
        <!-- used for shop templates with filters on top-->
        <div class="bg-dark pt-4 pb-5">
            <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
                <div class="d-lg-flex justify-content-between pb-3">
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol
                                class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                            class="ci-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap"><a href="shop.html">Shop</a>
                                </li>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-light mb-0">Shop</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5 mb-2 mb-md-4">
            <!-- Toolbar-->
            <div class="bg-light shadow-lg rounded-3 p-4 mt-n5 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dropdown me-2"><a class="btn btn-outline-secondary dropdown-toggle"
                            data-bs-toggle="collapse"><i class="ci-filter me-2"></i>Filters</a></div>
                    <!-- <div class="d-flex"><a class="nav-link-style me-3" href="#"><i class="ci-arrow-left"></i></a><span
                            class="fs-md">1 / 5</span><a class="nav-link-style ms-3" href="#"><i
                                class="ci-arrow-right"></i></a></div> -->
                    <div class="d-none d-sm-flex"><a
                            class="btn btn-icon nav-link-style bg-primary text-light disabled opacity-100 me-2"
                            href="#"><i class="ci-view-grid"></i></a></a></div>
                </div>
                <!-- Toolbar with expandable filters-->
                <div class="collapse" >
                    <div class="row pt-4">
                        <div class="col-lg-4 col-sm-6">
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Filter by Brand-->
                            <div class="card mb-grid-gutter">
                                <div class="card-body px-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products grid-->
            <div class="row pt-3 mx-n2">
                <!-- Product-->
                @foreach ($products as $product )
                @if ($product->status=='active')
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <div class="product-card-actions d-flex align-items-center">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                        </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img
                                src="{{Storage::url($product->image)}}" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{$product->description}}</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v2.html">{{$product->title}}</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">Rp {{number_format($product->price)}}</span>
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()=== null)
                        <div class="card-body card-body-hidden">
                            <a class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"
                            href="{{route('login')}}"><i class="ci-cart fs-sm me-1"></i>Addto Cart</a>
                        </div>
                        @else
                        <div class="card-body card-body-hidden">
                            <a class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"
                            href="{{route('add-to-cart',$product->slug)}}"><i class="ci-cart fs-sm me-1"></i>Addto Cart</a>
                        </div>
                        @endif
                    </div>
                    <hr class="d-sm-none">
                </div>
                @else

                @endif

                @endforeach
            </div>
        </div>
        <hr class="my-3">
        <!-- Pagination-->
        <!-- <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
          <
/ul>
          <ul class="pagination">

 <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
          </ul>
        </nav> -->
        </div>
    </main>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
        </i></a>
</body>
@endsection
