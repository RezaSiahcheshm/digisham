@extends('layouts.home-master')
@section('style')
    <style>
        .card {
            border-radius: 5px;
            background-color: #fff;
            padding: 15px 10px;
            margin: 10px;
        }

        .rating-box {
            width: 120px;
            height: 110px;
            margin-right: auto;
            margin-left: auto;
            background-color: #FBC02D;
            color: #fff
        }

        .rating-bar {
            width: 67%;
            padding: 8px;
            border-radius: 5px
        }

        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
            border-radius: 20px;
            cursor: pointer;
        }

        .bar-5 {
            width: 70%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-4 {
            width: 30%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-3 {
            width: 20%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-2 {
            width: 10%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-1 {
            width: 0%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .star-active {
            color: #FBC02D;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .star-active:hover {
            color: #F9A825;
            cursor: pointer
        }

        .star-inactive {
            color: #CFD8DC;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper ">
        <header class="header border-bottom d-flex justify-content-between align-items-center ">
            <span class="icon invisible">
                <i class="fas fa-chevron-left"></i>
            </span>
            <h4 class="m-0">شمرون کباب</h4>
            <a href="{{route('restaurant')}}" class="icon">
                <i class="fas fa-chevron-left"></i>
            </a>
        </header>
        <main class="">
            <!--<div class="d-flex justify-content-between align-items-center border-bottom p-1 ">-->
            <!--    <button type="button" class="btn btn-outline-secondary  btn-block m-0">اطلاعات</button>-->
            <!--    <button type="button" class="btn btn-outline-secondary  btn-block m-0">نظرات</button>-->
            <!--</div>-->
            <!--<div class="btn-group d-flex  justify-content-center align-items-center border-bottom p-2 " role="group" aria-label="Basic example">-->
            <!--    <button type="button" class="btn btn-outline-secondary btn-block m-0">اطلاعات</button>-->
            <!--    <button type="button" class="btn btn-secondary btn-block m-0">نظرات</button>-->
            <!--</div>-->

            <nav class="nav nav-pills nav-justified border-bottom p-1">
                <a class="nav-item nav-link" href="{{route('information')}}">اطلاعات</a>
                <a class="nav-item nav-link bg-dark active" href="{{route('comment')}}">نظرات</a>
            </nav>

            <div class="row m-0 justify-content-center">
                <div class="col-12 text-center p-0 ">
                    <div class="card my-2">
                        <div class="row m-0 d-flex align-items-center">
                            <div class="col-sm-4 p-0 d-flex flex-column">
                                <div class="rating-box">
                                    <h1 class="pt-4">۴.۵</h1>
                                    <p class="font-weight-bold" style="font-size: .7rem;">از مجموع ۱۱۶۵۰ امتیاز</p>
                                </div>
                                <div>
                                    <span class="fa fa-star star-active mx-1"></span>
                                    <span class="fa fa-star star-active mx-1"></span>
                                    <span class="fa fa-star star-active mx-1"></span>
                                    <span class="fa fa-star star-active mx-1"></span>
                                    <span class="fa fa-star star-inactive mx-1"></span>
                                </div>
                            </div>
                            <div class="col-sm-8 p-0">
                                <div class="">
                                    <table class="text-right mx-auto">
                                        <tr>
                                            <td class="rating-label">عالی</td>
                                            <td class="rating-bar">
                                                <div class="bar-container">
                                                    <div class="bar-5"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">۱۲۳ رای</td>
                                        </tr>
                                        <tr>
                                            <td class="rating-label">خوب</td>
                                            <td class="rating-bar">
                                                <div class="bar-container">
                                                    <div class="bar-4"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">۲۳ رای</td>
                                        </tr>
                                        <tr>
                                            <td class="rating-label">متوسط</td>
                                            <td class="rating-bar">
                                                <div class="bar-container">
                                                    <div class="bar-3"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">۱۰ رای</td>
                                        </tr>
                                        <tr>
                                            <td class="rating-label">ضعیف</td>
                                            <td class="rating-bar">
                                                <div class="bar-container">
                                                    <div class="bar-2"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">۳ رای</td>
                                        </tr>
                                        <tr>
                                            <td class="rating-label">افتضاح</td>
                                            <td class="rating-bar">
                                                <div class="bar-container">
                                                    <div class="bar-1"></div>
                                                </div>
                                            </td>
                                            <td class="text-center">۰ رای</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom p-3">
                        <div class="row m-0 ">
                            <div class="ml-auto text-right d-flex">
                                <img class="profile-pic ml-3" src="images/profile.png">
                                <div class="mt-1">
                                    <p class="m-0" style="font-size: 1.2rem;">رضا سیاه چشم</p>
                                    <p class="text-muted text-right ml-auto my-1" style="font-size: .8rem;"> ۱۰ اردیبهشت ۱۴۰۰ </p>
                                </div>
                            </div>
                            <div class="">
                                <p class="m-0" style="font-size: .8rem;">
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-inactive"></span>
                                </p>
                            </div>
                        </div>
                        <p class="text-right lead my-2" style="font-size: 1rem;">عالی بود عین همیشه من یه خوارک دو سیخ کوبیده سفارش داده بودم وقتی سفارش رسید سه تا سیخ کوبیده بود حلال کنید دیگه</p>
                        <div class="food-tag-box ">
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب شیشلیک</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک جوجه کباب بدون استخوان (فیله) شمرون</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">چلو کره</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب لقمه گوسفندی</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">بورانی بادمجان</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">زیتون پرورده</small>
                        </div>
                    </div>
                    <div class="border-bottom p-3">
                        <div class="row m-0 ">
                            <div class="ml-auto text-right d-flex">
                                <img class="profile-pic ml-3" src="images/profile.png">
                                <div class="mt-1">
                                    <p class="m-0" style="font-size: 1.2rem;">رضا سیاه چشم</p>
                                    <p class="text-muted text-right ml-auto my-1" style="font-size: .8rem;"> ۱۰ اردیبهشت ۱۴۰۰ </p>
                                </div>
                            </div>
                            <div class="">
                                <p class="m-0" style="font-size: .8rem;">
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-inactive"></span>
                                </p>
                            </div>
                        </div>
                        <p class="text-right lead my-2" style="font-size: 1rem;">عالی بود عین همیشه من یه خوارک دو سیخ کوبیده سفارش داده بودم وقتی سفارش رسید سه تا سیخ کوبیده بود حلال کنید دیگه</p>
                        <div class="food-tag-box ">
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب شیشلیک</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک جوجه کباب بدون استخوان (فیله) شمرون</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">چلو کره</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب لقمه گوسفندی</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">بورانی بادمجان</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">زیتون پرورده</small>
                        </div>
                    </div>
                    <div class="border-bottom p-3">
                        <div class="row m-0 ">
                            <div class="ml-auto text-right d-flex">
                                <img class="profile-pic ml-3" src="images/profile.png">
                                <div class="mt-1">
                                    <p class="m-0" style="font-size: 1.2rem;">رضا سیاه چشم</p>
                                    <p class="text-muted text-right ml-auto my-1" style="font-size: .8rem;"> ۱۰ اردیبهشت ۱۴۰۰ </p>
                                </div>
                            </div>
                            <div class="">
                                <p class="m-0" style="font-size: .8rem;">
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-active"></span>
                                    <span class="fa fa-star star-inactive"></span>
                                </p>
                            </div>
                        </div>
                        <p class="text-right lead my-2" style="font-size: 1rem;">عالی بود عین همیشه من یه خوارک دو سیخ کوبیده سفارش داده بودم وقتی سفارش رسید سه تا سیخ کوبیده بود حلال کنید دیگه</p>
                        <div class="food-tag-box ">
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب شیشلیک</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک جوجه کباب بدون استخوان (فیله) شمرون</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">چلو کره</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">خوراک کباب لقمه گوسفندی</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">بورانی بادمجان</small>
                            <small class="food-tag badge badge-pill badge-secondary m-1">زیتون پرورده</small>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
@endsection
