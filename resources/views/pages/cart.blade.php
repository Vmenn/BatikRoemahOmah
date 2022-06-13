@extends('layouts.app')
@section('title')
Batik Roemah Omah - Cart
@endsection
@section('content')

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
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
                            <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">Shop</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">Your cart</h1>
                </div>
            </div>
        </div>
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                <!-- List of items-->
                <section class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
                        <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm ps-2"
                            href="shop-grid-ls.html"><i class="ci-arrow-left me-2"></i>Continue shopping</a>
                    </div>
                    <form action="{{route('cart.update')}}" method="POST">
                        @csrf
                        @if(Helpers::getAllProductFromCart())
						@foreach(Helpers::getAllProductFromCart() as $key=>$cart)
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                            <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a
                                    class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="#"><img
                                        src="{{Storage::url($cart->product->image)}}" width="160" alt="Product"></a>
                                <div class="pt-2">
                                    <h3 class="product-title fs-base mb-2"><a href="#">{{$cart->product->title}}</a>
                                    </h3>
                                    <div class="fs-sm"><span
                                            class="text-muted me-2">Color: {{$cart->product->color}}</span>
                                    </div>

                                    <div class="fs-lg text-accent pt-2">Rp {{number_format($cart->product->price)}}</div>
                                </div>
                            </div>
                            <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start"
                                style="max-width: 9rem;">
                                <label class="form-label" for="quantity">Quantity</label>
                                <input class="form-control" type="text" name="quant[{{$key}}]" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}">
													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">

                                <a class="btn btn-link px-0 text-danger" type="button"
                                    href="{{route('cart-delete',$cart->id)}}"><i class="ci-close-circle me-2"></i><span
                                        class="fs-sm">Remove</span></a>
                            </div>
                        </div>

                            @endforeach
                            <button class="btn btn-outline-accent d-block w-100 mt-4" type="submit"><i
                                class="ci-loading fs-base me-2"></i>Update cart</button>
                            @else
                                    <tr>
                                        <td class="text-center">
                                            There are no any carts available. <a href="{{route('shop')}}" style="color:blue;">Continue shopping</a>

                                        </td>
                                    </tr>
                            @endif
                    </form>
                </section>
                <!-- Sidebar-->
                <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                    <div class="bg-white rounded-3 shadow-lg p-4">
                        <div class="py-2 px-xl-2">
                            <div class="text-center mb-4 pb-3 border-bottom">
                                <h2 class="h6 mb-3 pb-1">Subtotal</h2>
                                <h3 class="fw-normal">Rp {{number_format(Helpers::totalCartPrice())}}</h3>
                            </div>
                            <div class="accordion" id="order-options">
                            </div><a class="btn btn-primary btn-shadow d-block w-100 mt-4"
                                href="{{route('checkout')}}"><i class="ci-card fs-lg me-2"></i>Proceed to Checkout</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</body>
@endsection
