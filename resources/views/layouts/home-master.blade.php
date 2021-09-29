<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<title>{{$page_title ?? 'Not Set'}}</title>--}}
    {!! SEO::generate() !!}
    <link rel="icon" type="image/x-icon" href="{{asset('storage/img/favicon.ico')}}"/>
    <!-- Styles -->
    @include('home.inc.styles')
</head>
<body>
@yield('content')
<!-- Scripts -->
@include('home.inc.scripts')
</body>
</html>
