@extends('layouts.home-master')
@section('style')
    <style>
        .restaurant-baner {
            background-image: url({{asset('images/4.png')}});
            height: 15rem;
            min-width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .header-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px 0px 20px;
        }

        .iclose {
            font-size: 1.8rem;
            color: #000000;
            opacity: .5;
            line-height: 0;
            text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.8);
        }

        .iheart {
            font-size: 1.7rem;
            color: #dc3545;
            opacity: .8;
            line-height: 0;
            text-shadow: 0px 0px 10px #000000;
        }

        main {
            position: relative;
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
            background-color: #f5f5f5;
            transform: translateY(-70px);
        }

        .nav-pills .nav-link {
            border-radius: 1.2rem;
            color: #6c757d;

        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            /*background-color: #4e555b;*/
        }

        footer {
            background-color: #f5f5f5;
            border-top: 1px solid rgb(230, 230, 230);
        }

    </style>
@endsection
@section('content')
    <div class="wrapper ">
        <header class="restaurant-baner">
            <div class="header-icons">
                <span class="iclose">
                    <a href="{{route('home')}}"><i class="fas fa-times"></i></a>
                </span>
                <span class="iheart">
                    <i class="fas fa-heart" data-toggle="tooltip" data-placement="bottom" title="اضافه کردن به علاقه مندی ها"></i>
                </span>
            </div>
        </header>
        <main class="pt-2">
            <div class="d-flex justify-content-between mb-2">
                <h1 class="h2 my-auto mr-3">شمرون کباب</h1>
                <a href="{{route('comment')}}" class="border border-secondary rounded text-center px-1 py-2 ml-3 mt-1 ">
                    <small class="text-muted px-1">اطلاعات و نظرات</small>
                    <div class="d-flex align-items-center">
                        <span class="align-items-center px-1">1534<i class="fas fa-comment-alt pr-1"></i></span>
                        <span class="align-items-center px-1">4.2<i class="fas fa-star pr-1"></i></span>
                    </div>
                </a>
            </div>
            <div class="d-flex border-top border-bottom p-2">
                <ul class="nav nav-pills pr-0 align-items-center " role="tablist">
                    <li class="fas fa-search  text-muted my-auto px-1 h5"></li>
                    <li class="nav-item pr-1">
                        <a class="nav-link active h6 mb-0 " data-toggle="pill" href="#khorak">خوراک</a>
                    </li>
                    <li class="nav-item pr-1 ">
                        <a class="nav-link h6 mb-0" data-toggle="pill" href="#pish">پیش غذا</a>
                    </li>
                    <li class="nav-item pr-1 ">
                        <a class="nav-link h6 mb-0" data-toggle="pill" href="#salad">سالاد</a>
                    </li>
                    <li class="nav-item pr-1 ">
                        <a class="nav-link h6 mb-0" data-toggle="pill" href="#dirink">نوشیدنی</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="khorak">
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره1</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره2</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره3</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره4</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره4</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pish">
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره4</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره5</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره6</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره7</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="salad">
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره8</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره9</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره10</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="dirink">
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره11</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom p-2">
                        <div class="d-flex">
                            <img src="{{asset('images/5.jpg')}}" class="ml-2" height="90" alt="">
                            <div class="m-2">
                                <h3 class="h5">خوراک کباب راسته بره12</h3>
                                <p class="text-muted  m-0 ">۳۸۰ گرم راسته بره ذغالی، نان تازه داغ، گوجه کبابی، فلفل کبابی، ریحان تازه، لیمو ترش، ترشی انبه</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-wrap pr-2">
                                <span style="font-size: 1rem">۱۵۰,۰۰۰</span>
                                <span class="pr-1" style="font-size: 0.8rem">تومان</span>
                            </div>
                            <div class="spinner btn-group col-4">
                                <label class="control-label"></label>
                                <input class="form-control p-0" inputmode='none' disabled type="number" value="0" min="0" max="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="fixed-bottom">
            <form action="bag.html" class="px-4 py-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block ">تکمیل خرید</button>
            </form>
        </footer>
    </div>
@endsection
