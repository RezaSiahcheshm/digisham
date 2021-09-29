@extends('layouts.home-master')
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
    <div class="wrapper ">
        <header>
            <div class="row text-light text-center m-0 p-0 pt-5">
                <h1 class="col-12 display-4 m-0 ">MenuPay</h1>
                <small class="col-12">منوپی یه منوی دیجیتال</small>
            </div>
        </header>

        <main>
            <div class="row text-light m-0 pt-5">
                <p class="col-12 text-center px-5">لطفا برای تکمیل فرایند ثبت نام اطلاعات خواسته شده را پر نمایید</p>
            </div>
            <div class="mx-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label class="text-white" for="name">نام</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="نام" value="{{ old('name') }}" autocomplete="name" required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="lastname"> نام خانوادگی</label>
                        <input type="text" name="lastname" class="form-control @error('name') is-invalid @enderror" id="lastname" placeholder="نام خانوادگی" value="{{ old('lastname') }}" autocomplete="lastname" required autofocus>
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="email">ایمیل ( اختیاری )</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="ایمیل" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row d-flex justify-content-center my-4">
                        <div class="form-check form-check-inline px-5">
                            <input type="radio" name="gender" class="form-check-input @error('gender') is-invalid @enderror" id="man" value="M" required>
                            <label class="form-check-label text-white" for="man">مرد</label>
                        </div>
                        <div class="form-check form-check-inline px-5">
                            <input type="radio" name="gender" class="form-check-input @error('gender') is-invalid @enderror" id="female" value="F" required>
                            <label class="form-check-label text-white" for="female">زن</label>
                        </div>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-sm btn-block btn-primary p-2">ثبت نام</button>
                    <small class="form-text text-muted">با ورود به سایت شما شرایط و قوانین استفاده از سرویس های سایت منوپی را می‌پذیرید.</small>
                </form>
            </div>
        </main>
    </div>
@endsection


