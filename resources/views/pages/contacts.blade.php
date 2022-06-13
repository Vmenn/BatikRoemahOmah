@extends('layouts.app')
@section('title')
Batik Roemah Omah-Contach
@endsection
@section('content')
<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <main class="page-wrapper">
        <!-- Page Title (Light)-->
        <div class="bg-dark pt-4 pb-5">
            <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
                <div class="d-lg-flex justify-content-between pb-3">
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol
                                class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                            class="ci-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap"><a href="{{route('about')}}">Contach</a>
                                </li>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-light mb-0">Contach</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact detail cards-->
        <section class="container-fluid pt-grid-gutter">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll>
                        <div class="card-body text-center"><i class="ci-location h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-2">Main store address</h3>
                            <p class="fs-sm text-muted">jalan poltangan raya RT. 04 RW. 05 tanjung barat jakarta selatan</p>
                            <div class="fs-sm text-primary">Click to see map<i
                                    class="ci-arrow-right align-middle ms-1"></i></div>
                        </div>
                    </a></div>
                <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                        <div class="card-body text-center"><i class="ci-time h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-3">Working hours</h3>
                            <ul class="list-unstyled fs-sm text-muted mb-0">
                                <li>Mon - Fri: 10AM - 7PM</li>
                                <li class="mb-0">Sta: 11AM - 5PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                        <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-3">Phone numbers</h3>
                            <ul class="list-unstyled fs-sm mb-0">
                                <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style"
                                        href="tel:0851555499250">0851555499250</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                    <div class="card h-100">
                        <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-3">Email addresses</h3>
                            <ul class="list-unstyled fs-sm mb-0">
                                <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style"
                                        href="mailto:eby.fadillah24@gmail.com">eby.fadillah24@gmail.com</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Split section: Map + Contact form-->
        <div class="container-fluid px-0" id="map">
            <div class="row g-0">
                <div class=" iframe-full-height-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7189476683807!2d106.84968800000001!3d-6.3006127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8a7588b493%3A0x8341fd73551f6451!2sJl.%20Poltangan%20Raya%2C%20RT.4%2FRW.5%2C%20Tj.%20Bar.%2C%20Kec.%20Jagakarsa%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1655122897164!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
        </i></a>

</body>
@endsection
