@extends('layouts.home-master')
@php
    $category_name = 'pages';
    $page_name = 'terms';
@endphp
@section('content')

    <div id="headerWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
                    <a href="index.html" class="navbar-brand-privacy">
                        <img src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 class="main-heading">قوانین و مقررات سایت</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="privacyWrapper" class="">
        <div class="privacy-container">
            <div class="privacyContent">
                <div class="d-flex justify-content-between privacy-head">
                    <div class="privacyHeader">
                        <h1>قوانین و مقررات سایت</h1>
                        <p>بروزرسانی شده در 15 مهر 1399</p>
                    </div>
                    <div class="get-privacy-terms align-self-center">
                        <button class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                            پرینت
                        </button>
                    </div>
                </div>
                <div class="privacy-content-container">
                    <section>
                        <h5>لطفا خط مشی ما را با دقت بخوانید</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                            تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                            در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                            فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                            شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <p>لورم ایپسوم متن ساخت و ساز با ارائه محصولات تولیدی و تولیدی با استفاده از طراحان گرافیک ، با
                            استفاده از طراحان گرافیک.
                        </p>
                    </section>
                    <h5 class="policy-info-ques">چه اطلاعات شخصی را جمع می کنیم و چرا آن را جمع آوری می کنیم</h5>
                    <section>
                        <h5> رسانه ها </h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                            تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                            در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                            فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                            شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </section>
                    <section>
                        <h5> بیسکوییت ها </h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                            تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                            در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                            فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                            شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <section>
                            <section>
                                <h5> محتوای وب سایت های دیگر جاسازی شده است.</h5>
                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و
                                    برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.
                                </p>
                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و
                                    برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.
                                </p>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">بالا</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">کپی رایت سمت راست</p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">کپی رایت سمت چپ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
