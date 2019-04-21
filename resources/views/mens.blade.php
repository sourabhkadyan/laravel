<!DOCTYPE html>
<html>
<head>
    @include('frontEnd.includes.head')
    @yield('style')
    @include('frontEnd.includes.script')
</head>
<body>
@yield('style')
@include('frontEnd.includes.nav')
@yield('content')
@include('frontEnd.includes.mens')
@include('frontEnd.includes.footer')
@yield('script')
</body>
</html>
