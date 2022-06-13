@extends('layouts.app')
@section('title')
Batik Roemah Omah - About
@endsection
@section('content')

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <main class="container-fluid px-0">
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
                                <li class="breadcrumb-item text-nowrap"><a href="about.html">About</a>
                                </li>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-light mb-0">About</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row: Shop online-->
        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary"
                style="min-height: 15rem; background-image: url('Frontend/img/roemah.jpeg');"></div>
            <div class="col-md-6 px-3 px-md-5 py-5">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">Batik Roemah Omah</h2>
                    <p class="fs-sm pb-3 text-muted">Batik Roemah Omah didirikan pada awal tahun 2019. Pertama kali dimulai dengan membuka jasa titip saja dari antar teman via chat whatsapp,Lalu akhirnya dijadikan usaha berjualan batik lebih tepatnya daster batik rumahan. Awal mula Batik Roemah omah melakukan bisnis jual beli yaitu dengan cara face to face, dan juga di Instagram. Semua dilalukan masih secara manual.Pada akhirnya diawal tahun 2020, sejak adanya pandemic semua diharuskan dirumah dan kegiatan bertemu dengan orang banyak berkurang. maka penjualan secara face to face juga menurun menyebabkan jangkauan pasar yang kurang maksimal. Lalu pencatatan data penjualan dan transaksi juga masih di lakukan secara offline, karena hal itu dibuatlah website ini agar mempermudah pembeli dan pemilik toko untuk menghindari kehilangan data-data penjualan dan transaksinya.</p><a class="btn btn-primary btn-shadow"
                        href="{{route('shop')}}">View products</a>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
        </i></a>
</body>
@endsection
