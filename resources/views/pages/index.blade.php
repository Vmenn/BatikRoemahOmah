@extends('layouts.app')
@section('title')
    Batik Roemah Omah
@endsection
@section('content')

    <body class="handheld-toolbar-enabled">
        <!-- Google Tag Manager (noscript)-->
        <noscript>
            <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
                style="display: none; visibility: hidden;"></iframe>
        </noscript>

        <main class="page-wrapper">

            <!-- Hero (Banners + Slider)-->
            <section class="bg-secondary py-4 pt-md-5">
                <div class="container py-xl-2">
                    <div class="row">
                        <!-- Slider     -->
                        <div class="col-xl-9 pt-xl-4 order-xl-2">
                            <div class="tns-carousel">
                                <div class="tns-carousel-inner"
                                    data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                                    src="{{url('Frontend/img/pilihan.jpg')}}" alt="VR Collection"></div>
                                            <div
                                                class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                                                <h2 class="fw-light pb-1 from-bottom">Batik Roemah Omah</h2>
                                                <h1 class="display-4 from-bottom delay-1">Batik</h1>
                                                <h5 class="fw-light pb-3 from-bottom delay-2">Banyak pilihan batik dengan kualitas top</h5>
                                                <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                                        class="btn btn-primary btn-shadow" href="{{route('shop')}}l">Shop
                                                        Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                                    src="{{url('Frontend/img/kualitasbahan.jpg')}}" alt="VR Collection"></div>
                                            <div
                                                class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                                                <h2 class="fw-light pb-1 from-start">Explore the best</h2>
                                                <h1 class="display-4 from-start delay-1">BatikCollection</h1>
                                                <h5 class="fw-light pb-3 from-start delay-2">on the market</h5>
                                                <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                                        class="btn btn-primary btn-shadow" href="{{route('shop')}}">Shop
                                                        Now<i class="ci-arrow-right ms-2 me-n1"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Banner group-->
                        <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
                            <div class="table-responsive" data-simplebar>
                                <div class="d-flex d-xl-block"><a
                                        class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                                        href="#" style="min-width: 16rem;"><img src="{{url('Frontend/img/Kualitas.jpg')}}"
                                            width="125" alt="Banner">
                                        <div class="py-4 px-2">
                                            <h5 class="mb-2"><span class="fw-light">Bahan</span><br>Batik
                                                <span class="fw-light">Dengan</span><br>Top Kuwalitas</h5>
                                            <div class="text-info fs-sm">Shop now<i class="ci-arrow-right fs-xs ms-1"></i>
                                            </div>
                                        </div>
                                    </a><a
                                        class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                                        href="#" style="min-width: 16rem;"><img src="{{url('Frontend/img/pilihan.jpg')}}"
                                            width="125" alt="Banner">
                                        <div class="py-4 px-2">
                                            <h5 class="mb-2"><span class="fw-light">Banyak pilihan</span><br>menarik<br></h5>
                                            <div class="text-warning fs-sm">Shop now<i
                                                    class="ci-arrow-right fs-xs ms-1"></i></div>
                                        </div>
                                    </a><a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4"
                                        href="#" style="min-width: 16rem;"><img src="{{url('Frontend/img/canting.jpg')}}"
                                            width="125" alt="Banner">
                                        <div class="py-4 px-2">
                                            <h5 class="mb-2"><span class="fw-light">Memperhatikan tradisi
                                                    </span><br>membatik <span class="fw-light">di</span><br>Indonesia
                                            </h5>
                                            <div class="text-success fs-sm">Shop now<i
                                                    class="ci-arrow-right fs-xs ms-1"></i></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Products grid (Trending products)-->
            <section class="container pt-5">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                    <h2 class="h3 mb-0 pt-3 me-2">Trending products</h2>
                    <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="{{route('shop')}}">More
                            products<i class="ci-arrow-right ms-1 me-n1"></i></a></div>
                </div>
                <!-- Grid-->
                <div class="row pt-2 mx-n2">
                    <!-- Product-->
                    @foreach ($products as $product)
                    @if ($product->status=='active')
                    <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                        <div class="card product-card">
                            <div class="product-card-actions d-flex align-items-center">
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
                            </div><a class="card-img-top d-block overflow-hidden"><img
                                    src="{{Storage::url($product->image)}}" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{$product->description}}</a>
                                <h3 class="product-title fs-sm"><a >{{$product->title}}</a></h3>
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
            </section>
            <!-- Promo banner-->
            <section class="container mt-4 mb-grid-gutter">
                <div class="bg-faded-info rounded-3 py-4">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Batik Roemah Omah</span>
                                <h3 class="mt-4 mb-1 text-body fw-light">Semua Original</h3>
                                <h2 class="mb-1">Dibuat dengan mempertahankan keaslianya</h2>
                                <p class="h5 text-body fw-light">Dapatkan segera!</p>
                                <a class="btn btn-accent" href="{{route('shop')}}">View offers<i
                                        class="ci-arrow-right fs-ms ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-md-7"><img src="{{url('Frontend/img/kualitasbahan.jpg')}}" alt="iPad Pro Offer"></div>
                    </div>
                </div>
            </section>

            <!-- Product widgets-->
            <section class="container pb-4 pb-md-5">
                <div class="row">
                    <!-- Bestsellers-->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">
                            <h3 class="widget-title">product</h3>
                            @foreach ( $defaults as $default)
                                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="{{Storage::url($default->image)}}" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a >{{$default->title}}</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">Rp {{number_format($default->price)}}</span></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- New arrivals-->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">

                            <h3 class="widget-title">New</h3>
                            @foreach ( $news as $default)
                                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="{{Storage::url($default->image)}}" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a >{{$default->title}}</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">Rp {{number_format($default->price)}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Top rated-->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">
                            <h3 class="widget-title">Hot</h3>
                            @foreach ( $hots as $default)
                                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="{{Storage::url($default->image)}}" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a >{{$default->title}}</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">Rp {{number_format($default->price)}}</span></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog + Instagram info cards-->
            <section class="container-fluid px-0">
                <div class="row g-0">
                    <div class="col-md-6"><a
                            class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
                            >
                            <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                                <h3 class="h5 mb-1">Tentang Batik Roemah omah</h3>
                                <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
                            </div>
                        </a></div>
                    <div class="col-md-6"><a
                            class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                            <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                                <h3 class="h5 mb-1">Follow on Instagram</h3>
                                <p class="text-muted fs-sm">#ShopWithCartzilla</p>
                            </div>
                        </a></div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
                class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
            </i></a>
    </body>
@endsection
