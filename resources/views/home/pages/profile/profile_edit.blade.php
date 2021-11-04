@extends('layouts.home-master')
@section('style')
    <style>
        body {
            background-color: rgba(245, 245, 245, 0.7);
        }

        header {
            font-size: 20px;
            font-weight: 500;
            padding: 20px 20px 10px 20px;
        }

        .iback {
            font-size: 2rem;
            opacity: .5;
        }

        main {
            font-size: 16px;
        }

        .fixed-button {
            background-color: #f5f5f5;
            border-top: 1px solid rgb(230, 230, 230);
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        <header class="d-flex justify-content-between">
            <span class="icon iback invisible">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="pt-2">
                <img class="rounded-circle" src="{{asset($user->image ?? 'images/profile.png')}}" alt="profile" width="140" height="140">
            </span>
            <span class="icon iback ">
                <a href="{{route('profile.index')}}"><i class="fas fa-chevron-left"></i></a>
            </span>
        </header>
        <main>
            <form action="{{route('profile.update') }}" class="d-flex flex-column mx-4" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">نام</label>
                    <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" value="{{old('name') ?? $user->name}}" placeholder="نام" autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">نام خانوادگی</label>
                    <input name="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" id="lastname" value="{{old('lastname') ?? $user->lastname}}" placeholder="نام خانوادگی" autocomplete="lastname" autofocus>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">آدرس ایمیل</label>
                    <input name="email" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror " id="email" value="{{old('email') ?? $user->email}}" placeholder="آدرس ایمیل" autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mobile">شماره موبایل</label>
                    <input name="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror " id="mobile" value="{{old('mobile') ?? $user->mobile}}" placeholder="شماره موبایل" autocomplete="mobile" autofocus disabled>
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="row d-flex justify-content-center my-2 pb-5 mb-5">
                    <div class="form-check form-check-inline px-5">
                        <input name="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" id="man" value="M" {{ ($user->gender === 'M') ? 'checked' : '' }}>
                        <label class="form-check-label" for="man">مرد</label>
                    </div>
                    <div class="form-check form-check-inline px-5">
                        <input name="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" id="female" value="F" {{ ($user->gender === 'F') ? 'checked' : '' }}>
                        <label class="form-check-label" for="woman">زن</label>
                    </div>
                </div>
                <div class="fixed-button">
                    <div class="m-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">ویرایش</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
@endsection