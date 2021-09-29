@extends('layouts.home-master')
@section('style')
    <style>
        #map-canvas {
            width: 100%;
            height: 200px;
        }

        .map-btn > .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0 !important;
            margin: 0;
            width: 100%;
        }

        .work-times {
            display: block;
            font-size: 80%;
            color: #6c757d;
        }

    </style>
@endsection
@section('content')
    <div class="wrapper">
        <header class="header border-bottom d-flex justify-content-between align-items-center">
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
                <a class="nav-item nav-link bg-dark active " href="{{route('information')}}">اطلاعات</a>
                <a class="nav-item nav-link" href="{{route('comment')}}">نظرات</a>
            </nav>

            <div class="row mx-auto">
                <div id="map-canvas"></div>
            </div>

            <div class="map-btn d-flex btn-group">
                <div class="btn btn-info p-1">
                    <svg width="13px" height="13px" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 216.975 216.975" style="enable-background:new 0 0 216.975 216.975;" xml:space="preserve">
	            <path d="M182.442,0H34.53C15.49,0,0,15.491,0,34.531v147.913c0,19.04,15.49,34.53,34.53,34.53h147.912
                c19.041,0,34.532-15.49,34.532-34.53V34.531C216.975,15.491,201.483,0,182.442,0z M135.731,48.122
                C135.731,29.858,150.59,15,168.852,15c18.264,0,33.122,14.858,33.122,33.122c0,12.021-18.405,41.336-33.122,61.603
                C154.137,89.458,135.731,60.143,135.731,48.122z M15,34.531C15,23.762,23.761,15,34.53,15h99.463
                c-8.208,8.635-13.262,20.296-13.262,33.122c0,7.455,3.886,17.633,9.306,28.209l-26.846,26.846
                c-0.003,0.002-0.005,0.004-0.008,0.007c-0.003,0.003-0.005,0.005-0.007,0.008l-86.695,86.695c-0.95-2.296-1.481-4.808-1.481-7.442
                V34.531z M34.53,201.975c-2.635,0-5.146-0.531-7.442-1.481l81.399-81.398l81.398,81.398c-2.296,0.95-4.808,1.481-7.443,1.481H34.53
                z M201.975,182.444c0,2.635-0.531,5.146-1.481,7.442l-81.398-81.399l18.555-18.554c10.69,17.785,22.918,33.86,25.262,36.903
                c1.42,1.843,3.614,2.923,5.941,2.923c2.327,0,4.521-1.08,5.941-2.923c2.485-3.227,16.085-21.106,27.181-40.141V182.444z"/>
                        <path d="M63.964,98.25c20.009,0,36.287-16.278,36.287-36.287c0-4.142-3.357-7.5-7.5-7.5H63.964c-4.143,0-7.5,3.358-7.5,7.5
                c0,4.142,3.357,7.5,7.5,7.5h19.923C80.848,77.511,73.063,83.25,63.964,83.25c-11.737,0-21.286-9.549-21.286-21.287
                c0-11.737,9.549-21.286,21.286-21.286c5.684,0,11.03,2.214,15.052,6.234c2.93,2.928,7.678,2.928,10.607-0.002
                c2.928-2.929,2.927-7.678-0.002-10.606c-6.854-6.852-15.967-10.625-25.657-10.625c-20.008,0-36.286,16.278-36.286,36.286
                C27.678,81.972,43.956,98.25,63.964,98.25z"/>
            </svg>
                    <a itemprop="url" class="direction-link text-white pr-1" target="_blank" href="//maps.google.com/maps?f=d&amp;daddr=35.736581, 51.328005&amp;hl=en"> نشان</a>
                </div>
                <div class="btn btn-info p-1">
                    <i class="fab fa-waze"></i>
                    <a itemprop="url" class="direction-link text-white pr-1" target="_blank" href="https://www.waze.com/ul?place=ChIJzfVWkAAFjj8RWHiHdosuS3A&ll=35.79888190%2C51.47337620&navigate=yes">گوگل مپ</a>
                </div>
                <div class="btn btn-info p-1">
                    <i class="fab fa-waze"></i>
                    <a itemprop="url" class="direction-link text-white pr-1" target="_blank" href="https://www.waze.com/ul?place=ChIJzfVWkAAFjj8RWHiHdosuS3A&ll=35.79888190%2C51.47337620&navigate=yes">ویز</a>
                </div>
            </div>

            <div class="p-2">

                <div class="d-flex align-items-center pb-2">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="pr-1">میدان تجریش، ضلع شمال شرقی</div>
                </div>

                <div class="d-flex align-items-center pb-2 px-1">
                    <span class="pl-2">نوع رستوران :</span>
                    <div class="food-tag-box">
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">فرانسوی</span>
                    </div>
                </div>

                <div class="d-flex align-items-center align-self-center pb-2 px-1">
                    <span class="pl-2">نوع غذا :</span>
                    <div class="food-tag-box">
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1 ">سوپ</span>
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">حلیم</span>
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">کباب</span>
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">پیتزای</span>
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">ساندویچ</span>
                        <span class="food-tag badge badge-pill badge-secondary m-1 py-1">صبحانه</span>
                    </div>
                </div>

                <div class="amenities pb-3 px-1">
                    <div class="amenities-box mx-2 my-1" data-toggle="tooltip" data-placement="bottom" title="پارکینگ رایگان">
                        <div class="amenities-tag p-2">
                            <i class="fas fa-smoking fa-2x"></i>
                        </div>
                        <span class="px-1">محدود</span>
                    </div>
                    <div class="amenities-box mx-2 my-1" data-toggle="tooltip" data-placement="bottom" title="سطح اقتصادی">
                        <div class="amenities-tag p-2">
                            <i class="fas fa-dollar-sign fa-2x"></i>
                        </div>
                        <span class="px-1">گران</span>
                    </div>
                    <div class="amenities-box mx-2 my-1" data-toggle="tooltip" data-placement="bottom" title="پارکینگ رایگان">
                        <div class="amenities-tag p-2">
                            <i class="fas fa-car-side fa-2x"></i>
                        </div>
                        <span class="px-1">مناسب</span>
                    </div>
                    <div class="amenities-box mx-2 my-1" data-toggle="tooltip" data-placement="bottom" title="پارکینگ رایگان">
                        <div class="amenities-tag p-2">
                            <i class="fas fa-car-side fa-2x"></i>
                        </div>
                        <span class="px-1">مناسب</span>
                    </div>
                </div>

                <div id="accordion" class="">
                    <div class="card mx-1">
                        <div class="card-header d-flex justify-content-between align-items-center px-2" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex align-items-center">
                                <i class="far fa-clock fa-sm"></i>
                                <span class="d-flex align-items-center align-self-center pr-1">ساعت کار رستوران</span>
                            </div>
                            <span class="d-flex align-items-center text-muted"><i class="fas fa-angle-down"></i></span>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body py-2 pl-1 pr-3  ">
                                <blockquote class="blockquote mb-0 ">
                                    <div class="d-flex justify-content-between text-muted pl-3 ">
                                        <div class="blockquote-footer">شنبه تا چهار‌شنبه</div>
                                        <div class="work-times">۹ تا ۱۵</div>
                                        <div class="work-times">۱۹ تا ۲۴</div>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted pl-3 ">
                                        <div class="blockquote-footer">پنج‌شنبه و جمعه</div>
                                        <div class="work-times">۹ تا ۱۵</div>
                                        <div class="work-times">۱۹ تا ۲۴</div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
