@extends('layouts.app')
@section('title')
Batik Roemah Omah-Checkout
@endsection
@section('content')
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
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">Checkout</h1>
                </div>
            </div>
        </div>
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                <section class="col-lg-8">
                    <!-- Steps-->
                    <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                            <div class="step-progress"><span class="step-count">1</span></div>
                            <div class="step-label"><i class="ci-cart"></i>Cart</div>
                        </a><a class="step-item active current" href="checkout-details.html">
                            <div class="step-progress"><span class="step-count">2</span></div>
                            <div class="step-label"><i class="ci-user-circle"></i>Details</div>
                        </a><a class="step-item" href="checkout-shipping.html">
                            <div class="step-progress"><span class="step-count">3</span></div>
                            <div class="step-label"><i class="ci-check-circle"></i>Review</div>
                        </a></div>
                    <!-- Autor info-->
                    <div
                        class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-3 mb-grid-gutter">
                        <div class="d-flex align-items-center">

                            <div class="ps-3">
                                <h3 class="fs-base mb-0">
                                    @if (Auth::user() === null)
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif

                                </h3><span class="text-accent fs-sm">
                                    @if (Auth::user() === null)
                                    @else
                                        {{ Auth::user()->email }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping address-->
                    <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>

                    <form action="{{ route('/Checkout-Order') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-fn">First Name</label>
                                    <input class="form-control" type="text" name="first_name" placeholder=""
                                        value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-ln">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" placeholder=""
                                        value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-email">E-mail Address</label>
                                    <input class="form-control" type="email" id="checkout-email" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-phone">Phone Number</label>
                                    <input class="form-control" type="text" id="checkout-phone" name="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-company">City</label>
                                    <input class="form-control" type="text" id="checkout-company" name="city"
                                        value="{{ old('city') }}">
                                    @error('city')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-zip">Code Post</label>
                                    <input class="form-control" type="text" id="checkout-zip" name="post_code"
                                        value="{{ old('post_code') }}">
                                    @error('post_code')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-address-1">Address</label>
                                    <input class="form-control" type="text" id="checkout-address-1" name="address"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-lg-flex pt-4 mt-3">
                            <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100"
                                    href="{{ route('cart') }}"><i class="ci-arrow-left mt-sm-0 me-1"></i><span
                                        class="d-none d-sm-inline">Back to
                                        Cart</span><span class="d-inline d-sm-none">Back</span></a></div>

                            <button type="submit" class="btn btn-primary d-block w-100"><span
                                    class="d-none d-sm-inline">Checkout</span><span class="d-inline d-sm-none">Next</span><i
                                    class="ci-arrow-right mt-sm-0 ms-1"></i> </button>
                        </div>
                    </form>

                    <!-- Navigation (desktop)-->

                </section>
                <!-- Sidebar-->
                <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                    <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
                        <div class="py-2 px-xl-2">
                            <div class="widget mb-3">
                                <h2 class="widget-title text-center">Order summary</h2>
                                @if(Helpers::getAllProductFromCart())
                                @foreach(Helpers::getAllProductFromCart() as $key=>$cart)
                                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                        href="shop-single-v1.html"><img src="{{Storage::url($cart->product->image)}}" width="64"
                                            alt="Product"></a>
                                    <div class="ps-2">
                                        <h6 class="widget-product-title"><a href="shop-single-v1.html">{{$cart->product->title}}</a></h6>
                                        <span class="text-muted">Color : {{$cart->product->color}}</span>
                                        <div class="widget-product-meta"><span
                                                class="text-accent me-2">Rp {{number_format($cart->product->price)}}</span><span
                                                class="text-muted">x {{$cart->quantity}}</span></div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                        <tr>
                                            <td class="text-center">
                                                There are no any carts available. <a href="{{route('shop')}}" style="color:blue;">Continue shopping</a>

                                            </td>
                                        </tr>
                                @endif
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
