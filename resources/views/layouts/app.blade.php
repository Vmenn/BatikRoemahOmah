<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @yield('title')
    </title>
    @include('includes.style')
    @stack('prepend-style')
    @stack('addon-style')

</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<body>
    @include('includes.navbar_navigasi')
    {{-- content --}}
    @yield('content')

    @include('includes.footer')
    {{-- script --}}
    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-script')
</body>

</html>
