@extends('layouts.admin-master')
@section('content')
    <div class="layout-y-spacing row mt-4 mx-0">
        <div class="col-xl-9 mx-auto">
            <form action="{{route('admin.cafe.store')}}" method="post" id="general-info" class="section general-info" enctype="multipart/form-data">
                @csrf
                <div class="widget">
                    <div class="widget-header col-12 p-0">
                        <h4>افزودن رستوران جدید</h4>
                    </div>
                    <div class="info">
                        <div class="form-row">
                            <div class="form-group col-lg-5 col-md-5 col-sm-5 ">
                                <label for="name">نام رستوران</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="نام رستوران">
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-4 ">
                                <label for="code">کد اختصاصی رستوران</label>
                                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" id="code" value="{{old('code')}}" placeholder="کد اختصاصی رستوران">
                                @error('code')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3 ">
                                <label for="status">وضعیت کار رستوران</label>
                                <select name="status" class="form-control selectpicker @error('status') is-invalid @enderror">
                                    <option>در حال کار</option>
                                    <option>در دست تعمییر</option>
                                    <option>تعطیل</option>
                                    <option>تعلیق</option>
                                    <option>مسدود</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-3 col-md-10 col-sm-10 col-7 ">
                                <label for="type">نوع رستوران</label>
                                <select name="type" class="form-control selectpicker @error('type') is-invalid @enderror" data-live-search="true" multiple="multiple">
                                    <option>سیب زمیه</option>
                                    <option>سیب زمینی سرخ شده</option>
                                    <option>برگر ، لرزش و یک لبخند</option>
                                    <option>شکر ، ادویه و همه چیز خوب است</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-5">
                                <label for="priceLvl">سطح قیمت</label>
                                <select name="priceLvl" class="form-control selectpicker @error('priceLvl') is-invalid @enderror">
                                    <option>انتخاب کنید...</option>
                                    <option value="$">$</option>
                                    <option value="$$">$$</option>
                                    <option value="$$$">$$$</option>
                                    <option value="$$$$">$$$$</option>
                                </select>
                                @error('priceLvl')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-7">
                                <label for="facilities">امکانات رستوران</label>
                                <select name="facilities" class="form-control selectpicker @error('facilities') is-invalid @enderror" data-live-search="true" multiple="multiple">
                                    <option data-content="<span class='badge badge-primary'>پارکینگ</span>">پارکینگ</option>
                                    <option data-content="<span class='badge badge-primary'>اینترنت رایگان</span>">اینترنت رایگان</option>
                                    <option data-content="<span class='badge badge-primary'>فضای باز</span>"> فضای باز</option>
                                    <option data-content="<span class='badge badge-primary'>اتاق سیگار</span>"> اتاق سیگار</option>
                                </select>
                                @error('facilities')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="owner">مالک رستوران</label>
                                <select name="owner" class="form-control selectpicker @error('owner') is-invalid @enderror" data-live-search="true" multiple="multiple">
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5</option>
                                </select>
                                @error('owner')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="manager">مدیر رستوران</label>
                                <select name="manager" class="form-control selectpicker @error('manager') is-invalid @enderror" data-live-search="true" multiple="multiple">
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5</option>
                                </select>
                                @error('manager')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="employee">کارمندان رستوران</label>
                                <select name="employee" class="form-control selectpicker @error('employee') is-invalid @enderror" data-live-search="true" multiple="multiple">
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 1</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 2</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 3</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 4</option>
                                    <option data-content="<img src='{{asset('images/profile-1.jpeg')}}' height='30px' style='border-radius: 15px;'> &nbsp; {{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5">{{ Auth::user()->name ?? 'name' }} {{ Auth::user()->lastName ?? 'lastName' }} 5</option>
                                </select>
                                @error('employee')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-row col-xl-9 p-0 m-0">
                                <div class="form-group col-12">
                                    <label for="address"> نشانی پستی رستوران</label>
                                    <textarea name="address" id="address" class="form-control textarea @error('address') is-invalid @enderror" maxlength="225" rows="5" placeholder="آدرس">{{old('address')}}</textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row col-xl-3 p-0 m-0">
                                <div class="form-group col-xl-12 col-sm-6 mb-1">
                                    <label for="zipCode">کد پستی رستوران</label>
                                    <input type="text" name="zipCode" class="form-control @error('zipCode') is-invalid @enderror" id="zipCode" value="{{old('zipCode')}}" placeholder="کد پستی">
                                    @error('zipCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-12 col-sm-6">
                                    <label for="tel">تلفن رستوران</label>
                                    <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" id="tel" value="{{old('tel')}}" placeholder="تلفن">
                                    @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-5 col-md-5 col-sm-5 ">
                                <label for="instagram">آیدی اینستاگرام رستوران</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" id="instagram" value="{{old('instagram')}}" placeholder="آیدی اینستاگرام">
                                </div>
                                @error('instagram')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-7 col-md-7 col-sm-7 ">
                                <label for="location">موقعیت جغرافیای رستوران</label>
                                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" value="{{old('location')}}" placeholder="موقعیت جغرافیای">
                                @error('location')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{--آپلود عکس چندگانه--}}
                        <div class="statbox widget mb-4" id="fuMultipleFile">
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <label>
                                        بارگذاری عکس های محیط رستوران
                                    </label>
                                    <label class="custom-file-container__custom-file photos">
                                        <input name="photos[]" type="file" class="custom-file-container__custom-file__custom-file-input" multiple accept="*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760"/>
                                        <span class="custom-file-container__custom-file__custom-file-control" photos></span>
                                    </label>
                                    <div class="custom-file-container__image-preview pb-0 pt-0 mt-4 mb-3 @error('photos') is-invalid @enderror"></div>
                                    <div class="float-right">
                                        <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FF5252" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </div>
                                    @error('photos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">افزودن</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
