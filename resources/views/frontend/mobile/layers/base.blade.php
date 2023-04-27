<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <meta name='dmca-site-verification' content='RUVtMzJmNWtydjBGQjNsQmFnSzNEQT090' />--}}
    {{--    <link href="{{asset('upload/images/common/large/icon-head.png')}}" rel="shortcut icon">--}}
    {{--    <link rel="stylesheet" href="{{asset('asset/lib/bootstrap/bootstrap.min.css')}}">--}}

    @yield('title')
    @yield('css')
</head>
<body>
@yield('header')
@yield('body')
@yield('footer')
@yield('js')
</body>
</html>
