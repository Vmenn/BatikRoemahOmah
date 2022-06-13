<!-- Sign in / sign up modal-->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
                </ul>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body tab-content py-4">

                <form method="POST" action="{{ route('login') }}" class="needs-validation tab-pane fade show active"
                    autocomplete="off" novalidate id="signin-tab">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="si-email">Email address</label>
                        <input name="email" value="{{ old('email') }}" required autocomplete="email"
                            class="form-control @error('email') is-invalid @enderror" type="email" id="si-email"
                            placeholder="johndoe@example.com" required>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                id="si-password" required name="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" name="remember"
                                    {{ old('remember') ? 'checked' : '' }} type="checkbox"><span
                                    class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-wrap justify-content-between">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="si-remember">
                            <label class="form-check-label" for="si-remember">Remember me</label>
                        </div><a class="fs-sm" href="#">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
                </form>

                <form method="POST" action="{{ route('register') }}" class="needs-validation tab-pane fade"
                    autocomplete="off" novalidate id="signup-tab">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="su-name">Full name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="su-name"
                            placeholder="John Doe" required name="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please fill in your name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="su-email">Email address</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="su-email"
                            placeholder="johndoe@example.com" required name="email" value="{{ old('email') }}" required
                            autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                id="si-password" required name="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" name="remember"
                                    {{ old('remember') ? 'checked' : '' }} type="checkbox"><span
                                    class="password-toggle-indicator"></span>
                            </label>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="su-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                            <input class="form-control" name="password_confirmation" type="password"
                                id="su-password-confirm" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" name="remember"
                                    {{ old('remember') ? 'checked' : '' }} type="checkbox"><span
                                    class="password-toggle-indicator"></span>

                            </label>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                </form>
            </div>



        </div>
    </div>
</div>
<!-- Navbar 3 Level (Light)-->
<header class="shadow-sm">
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="{{route('home')}}"><img
                        src="{{url('Frontend/img/Logo Ac.png')}}" width="170" alt="Air Condition"></a><a
                    class="navbar-brand d-sm-none flex-shrink-0 me-2" href="#"><img src="Frontend/img/logo-icon.png"
                        width="74" alt="Cartzilla"></a>
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                        <a
                        class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand
                            menu</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                    </a>
                    @if (Auth::user()== null)

                    @else
                    <a class="navbar-tool d-none d-lg-flex" href="{{route('orders')}}"><span
                        class="navbar-tool-tooltip">Track Order</span>
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                </a>
                    @endif

                    @guest
                    <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-sign-in"></i></div>
                        <div class="navbar-tool-text ms-n3">
                            <small>Hello</small>Sigin
                        </div>
                    </a>
                    @endguest

                    @auth
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2 btn-transparent " type="submit">
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-sign-in"></i></div>
                            <div class="navbar-tool-text ms-n3">
                                <small>{{Auth::user()->name}}</small>Logout
                            </div>
                        </button>
                    </form>
                    @endauth
                    <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                            href="{{route('cart')}}">
                            <span class="navbar-tool-label">
                               {{Helpers::cartCount()}}
                            </span><i class="navbar-tool-icon ci-cart"></i></a>
                        <a class="navbar-tool-text" href="{{route('cart')}}"><small>My Cart</small>
                            Rp {{number_format(Helpers::totalCartPrice())}}
                        </a>
           </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->
                    <div class="input-group d-lg-none my-3"><i
                            class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="Search for products">
                    </div>
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                href="{{route('home')}}">Home</a>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                href="{{route('shop')}}">Shop</a>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                href="{{route('about')}}">About Us</a>

                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                href="{{route('contach')}}">Contach</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
