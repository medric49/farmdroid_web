<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    @include("includes.links")
    <title>@yield("title","Farmdroid")</title>
    <link rel="stylesheet" href="{{asset('css/guest.css')}}">
    <style>
        footer {
            height: 30vh;

            color: white;
        }
    </style>
    @yield('style')
</head>
<body>
@include('components.guest.header')
@yield('content')

@include('components.guest.footer')
@include("includes.scripts")
@yield('script')
</body>
</html>
