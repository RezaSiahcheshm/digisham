@extends('layouts.home-master')@section('title', 'login')
@section('style')
    <style>
        body {
            background-image: url("/images/2.gif");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: 20% 50%;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper ">
        <header>
            <div class="row text-light text-center m-0 p-0 pt-5">
                <h1 class="col-12 display-4 m-0 ">MenuPay</h1>
                <small class="col-12">منوپی یه منوی دیجیتال</small>
            </div>
        </header>
        <main>
            <div class="row text-light text-center m-0 p-0 pt-5">
                <p class="col-12">به منوپی خوش آمدید</p>
                <p class="col-12">لطفا شماره موبایل خود را وارد کنید تا کد فعال سازی برای تان ارسال شود</p>
            </div>
            @error('alert')
            <div class="alert alert-danger text-left pr-0 pl-2 pb-0" dir="rtl">
                <button type="button" class="close pr-2" data-dismiss="alert" aria-label="Close" style="float: left !important;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <ul style="padding-right: 35px;">
                    <li>{{ $message }}</li>
                </ul>
            </div>
            @enderror
            <form method="POST" action="{{ route('login') }}" class="mx-5">
                @csrf
                <div class="form-group">
                    <label class="text-white" for="email">نام کاربری</label>
                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="نام کاربری یا ادرس ایمیل" autocomplete="email" required autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label class="text-white " for="password">گذرواژه</label>
                    @if (Route::has('password.request'))
                        <a class="btn btn-none text-muted text-left float-left" href="{{ route('password.request') }}">رمز عبور را فراموش کرده اید؟</a>
                    @endif
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="گذرواژه" autocomplete="current-password" required autofocus>
                    <small class="form-text text-muted">با ورود به سایت شما شرایط و قوانین استفاده از سرویس های سایت منوپی را می‌پذیرید.</small>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-muted" for="remember">مرا به خاطر بسپار</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-block btn-primary p-2">ورود</button>
            </form>
        </main>
    </div>
@endsection