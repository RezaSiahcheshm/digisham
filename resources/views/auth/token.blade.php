@extends('layouts.home-master')@section('title', 'code')
@section('style')
    <style>
        body {
            background-image: url({{asset('images/2.gif')}});
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: 20% 50%;
        }

    </style>
@endsection
@section('content')
    <div class="wrapper">
        <header>
            <div class="row text-light text-center m-0 p-0 pt-5">
                <h1 class="col-12 display-4 m-0 ">MenuPay</h1>
                <small class="col-12">منوپی یه منوی دیجیتال</small>
            </div>
        </header>
        <main>
            <form method="POST" action="{{ route('token') }}" class="mx-5">
                @csrf

                <div class="form-group">
                    <p for="code" class="col-12 text-center text-white mt-5">کد فعال سازی را وارد کنید</p>
                    <p class="col-12 text-right text-white "> کد ۶ رقمی ارسال شده به شماره {{session()->get('mobile')}} را وارد کنید.
                        <a href="{{route('login')}}" class="text-primary">تغییر شماره موبایل</a>
                    </p>
                    @if($errors->any())
                        <div class="alert alert-danger text-right pr-0 pl-2 pb-0" dir="rtl">
                            <button type="button" class="close pl-1" data-dismiss="alert" aria-label="Close" style="float: left !important;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                            <ul style="padding-right: 35px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input name="code" type="text" class="form-control @error('code') is-invalid @enderror" id="code"  placeholder="کد فعال سازی" autocomplete="code" autofocus>
                    @error('code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <small class="form-text text-muted">کد فعالسازی دریافت نکردید؟ ارسال مجدد</small>
                </div>
                <button type="submit" class="btn btn-sm btn-block btn-primary p-2">ورود</button>
            </form>
        </main>
    </div>
@endsection

























