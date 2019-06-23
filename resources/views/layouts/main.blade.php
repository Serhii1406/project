<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/product.css" rel="stylesheet">
</head>
<body>
<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="{{route('main')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('product')}}">{{__('education.Product')}}</a>
        <a class="py-2 d-none d-md-inline-block" href="#">{{__('education.Korzine')}}</a>
        @if(Route::has('login'))
            @auth
                    <ul>
                        <li>
                            <a class="py-2 d-none d-md-inline-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Вийти
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li><a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">Вхід</a></li>
            @endauth
        @endif
        @if(Auth::check()==true)
        @elseif(Auth::check()==false)
        <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">{{__('education.Reg')}}</a>
        @endif
{{--        <a class="py-2 d-none d-md-inline-block" href="#">{{__('education.Forme')}}</a>--}}
        @if(Auth::user() && Auth::user()->role == 'Moderator')
        <a class="@if(Request::is('admin')) py-2 d-none d-md-inline-block @endif" href="{{route('admin')}}">{{__('education.Admin')}}</a>
        @endif
    </div>
</nav>
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            @yield('content')
        </div>
<footer class="container py-5">
    <form class="container">
        <div class="row">
            <p>Copyright © Example.com 2018</p>
        </div>
    </form>
</footer>
</body>
</html>
