<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

@include('include.style')

</head>

<body>
    <div id="app">

@include('include.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">

    <a class="navbar-brand" href="#">
        <img src="{{ asset('image/LogoMieGacoan.png') }}" alt="GACOAN" width="200" height="200">
      </a>
</div>

@yield('konten')
{{-- @include('include.footer') --}}
        </div>
    </div>
@include('include.scripct')

</body>

</html>
