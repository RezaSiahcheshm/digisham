@extends('layouts.admin-master')
@section('content')
    <div class="layout-px-spacing">
        <div class="layout-top-spacing">

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing ">
                    <div class="widget widget-card-one">
                        <div class="widget-content">
                            <div class="media">
                                <div class="media-body d-flex  justify-content-between align-items-center">
                                    <h5>پیام</h5>
                                    <p class="meta-date-time">دوشنبه 20 مهر</p>
                                </div>
                            </div>
                            <p class="text-muted">به دیجی شام خوش آمدید</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-three">
                        {{--<div class="widget-heading">--}}
                        {{--    <h5 class="">خلاصه</h5>--}}
                        {{--</div>--}}
                        <div class="widget-content">

                            <div class="order-summary">

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>درآمد</h6>
                                            <p class="summary-count">92600 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>سود</h6>
                                            <p class="summary-count">37500 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>هزینه ها</h6>
                                            <p class="summary-count">550000 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">فعالیت های اخیر</h5>
                        </div>

                        <div class="widget-content">
                            <div class="mt-container mx-auto">

                                <div class="timeline-line">

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>راه اندازی مجدد سرور</p>
                                            <span class="badge badge-success">تکمیل شده</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>جزئیات قرارداد را به فریلنسر ارسال کنید</p>
                                            <span class="badge badge-danger">در انتظار</span>
                                            <p class="t-time">18:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>مهدی می خواهد زمان پروژه را افزایش دهد.</p>
                                            <span class="badge badge-primary">در حال پیش رفت</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>سرور برای حفظ و نگهداری</p>
                                            <span class="badge badge-success">تکمیل شده</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>پیوند مخرب شناسایی شد</p>
                                            <span class="badge badge-warning">مسدود شده</span>
                                            <p class="t-time">20:00</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{--<div class="tm-action-btn">--}}
                            {{--    <button class="btn">مشاهده همه--}}
                            {{--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>--}}
                            {{--    </button>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
