@extends('layouts.home-master')
@section('style')
    <style>
        body {
            background-image: url({{asset('images/3.png')}});
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: 50% 42%;
        }

        .ibars {
            float: right;
            font-size: 2.1rem;
            margin: 15px 18px 0 0;
            padding: 5px;
        }

        main {
            height: calc(100vh - 100px);
        }

    </style>
@endsection
@section('content')
    <div class="wrapper">
        <a href="{{route('slideMenu')}}" class="ibars icon text-white "><i class="fas fa-bars"></i></a>
        <main class=""></main>
    </div>
@endsection
