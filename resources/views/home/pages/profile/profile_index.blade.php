@extends('layouts.home-master')
@section('style')
    <style>
        body {
            background-color: rgba(245, 245, 245, 0.5);
        }

        header {
            font-size: 1.4rem;
            font-weight: 500;
            padding: 10px 20px;
        }

        .iclose {
            font-size: 2rem;
            opacity: .5;
            margin: 5px 5px 0 0;
        }

        main {
            font-size: 17px;
        }

    </style>
@endsection
@section('content')
    <div class="wrapper ">
        <header class="d-flex justify-content-between">
            <a href="{{route('home')}}" class="icon iclose">
                <i class="fas fa-times"></i>
            </a>
            <div class="d-flex flex-column">
                <img class="rounded-circle" src="{{asset(Auth::user()->image ?? 'images/profile.png')}}" alt="profile" width="150" height="150">
                <span class="text-center m-0 pt-3">{{getFullName(Auth::user())}}</span>
            </div>
            <span class="icon iclose invisible">
                <i class="fas fa-times"></i>
            </span>
        </header>
        <main>
            <div class="d-flex flex-column px-2 py-1 ">
                <span class="border-bottom px-3 py-3">
                    <a href="{{route('profile.edit')}}">نمایش اطلاعات کاربری</a>
                </span>
                {{--<div class="border-bottom px-3 py-3 d-flex justify-content-between align-items-center">--}}
                {{--    <span>--}}
                {{--        <a href="credit">افزایش اعتبار کیف پول</a>--}}
                {{--    </span>--}}
                {{--    <span class="text-muted">--}}
                {{--        <a href="credit">۱۰،۰۰۰ تومان</a>--}}
                {{--    </span>--}}
                {{--</div>--}}
                {{--<span class="border-bottom px-3 py-3">--}}
                {{--    <a href="reviews">نظرات من</a>--}}
                {{--</span>--}}
                <span class="border-bottom px-3 py-3">
                    <a href="favourites">رستوران های مورد علاقه</a>
                </span>
                {{--<span class="border-bottom px-3 py-3">--}}
                {{--    <a href="orders"> لیست سفارش ها</a>--}}
                {{--</span>--}}
                {{--<span class="border-bottom px-3 py-3">--}}
                {{--    <a href="transactions">لیست پرداخت ها</a>--}}
                {{--</span>--}}
                {{--<span class="border-bottom px-3 py-3">--}}
                {{--    <a href="support">تماس با پشتیبانی</a>--}}
                {{--</span>--}}
                {{--<span class="border-bottom px-3 py-3">--}}
                {{--    <a href="about">درباره ما</a>--}}
                {{--</span>--}}
                <span class="border-bottom px-3 py-3">
                    {{--<a href="login" class="">خروج</a>--}}
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-none ">خروج</button>
                    </form>
                </span>
                <small class="text-muted text-left pt-2 pl-2">نسخه ۱.۰.۰</small>
            </div>
        </main>
    </div>
@endsection