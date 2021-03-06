@extends('layouts.admin-master')
@section('style')
    {{-- User Create --}}
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/dropify/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin/tables/custom-table.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">
    <style>
        .widget .widget-header {
            border-bottom: 1px solid #ebedf2;
        }
    </style>
@endsection
@section('script')
    {{-- User Create  --}}
    <script src="{{asset('assets/js/users/account-settings.js')}}"></script>
    <script src="{{asset('plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                {{--<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">--}}
                <div class="row justify-content-center">
                    <div class="col-xl-9 layout-spacing">
                        <form action="{{route('admin.users.store')}}" method="post" id="general-info" class="section general-info">
                            @csrf
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row col-12">
                                        <h4>افزودن کاربر جدید</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="form-row">
                                        <div class="col-xl-12 mx-auto">
                                            <div class="form-row">
                                                <div class="col-xl-3 col-lg-2 col-md-3">
                                                    <div class="upload  mt-0 pr-md-3">
                                                        <input name="upload" type="file" class="dropify" id="input-file-max-fs" data-default-file="{{asset('/images/300x300.jpg')}}" data-max-file-size="2M" data-height="220"/>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-10 col-md-9 md-0 mt-3">
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="name">نام</label>
                                                            <input name="name" type="text" class="form-control mb-4 @error('name') is-invalid @enderror " id="name" value="{{old('name')}}" placeholder="نام" autocomplete="name" autofocus>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="lastname">نام خانوادگی</label>
                                                            <input name="lastname" type="text" class="form-control mb-4 @error('lastname') is-invalid @enderror" id="lastname" value="{{old('lastname')}}" placeholder="نام خانوادگی" autocomplete="lastname" autofocus>
                                                            @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="username">نام کاربری</label>
                                                            <input name="username" type="text" class="form-control mb-4 @error('username') is-invalid @enderror" id="username" value="{{old('username')}}" placeholder="نام کاربری" autocomplete="username" autofocus>
                                                            @error('username')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-6">
                                                            <label for="email">آدرس ایمیل</label>
                                                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror " id="email" value="{{old('email')}}" placeholder="آدرس ایمیل" autocomplete="email" autofocus>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="mobile">شماره موبایل</label>
                                                            <input name="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror " id="mobile" value="{{old('mobile')}}" placeholder="شماره موبایل" autocomplete="mobile" autofocus>
                                                            @error('mobile')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong></span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-2 col-sm-6  d-flex flex-column justify-content-between">
                                                            <label>جنسیت</label>
                                                            <div class="pb-2 d-flex flex-nowrap">
                                                                <div class="custom-control custom-radio custom-control-inline pb-2">
                                                                    <input type="radio" name="gender" class="custom-control-input @error('gender') is-invalid @enderror" id="man" value="M">
                                                                    <label class="custom-control-label" for="man">مرد</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline pb-2">
                                                                    <input type="radio" name="gender" class="custom-control-input @error('gender') is-invalid @enderror" id="female" value="F">
                                                                    <label class="custom-control-label" for="female">زن</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline pb-2 px-0 mx-0">
                                                                    <input class="custom-control-input @error('gender') is-invalid @enderror">
                                                                    @error('gender')
                                                                    <span class="invalid-feedback" role="">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-md-5 col-sm-6">
                                            <label for="identifyNumber">کد ملی</label>
                                            <input name="identifyNumber" type="text" class="form-control @error('identifyNumber') is-invalid @enderror " id="identifyNumber" value="{{old('identifyNumber')}}" placeholder="کد ملی" autocomplete="identifyNumber" autofocus>
                                            @error('identifyNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-2 col-sm-6">
                                            <label for="status">وضعیت حساب کاربر</label>
                                            <select name="status" class="form-control selectpicker @error('status') is-invalid @enderror">
                                                <option value="A">فعال</option>
                                                <option disabled>تعلیق</option>
                                                <option disabled>مسدود</option>
                                            </select>
                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="birthday">تاریخ تولد</label>
                                            <input name="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror " id="birthday" value="{{old('birthday')}}" placeholder="تاریخ تولد" autocomplete="birthday" autofocus>
                                            @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    @can('permissions-users')
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label for="permissions">دسترسی‌ها</label>
                                                <select name="permissions[]" class="form-control selectpicker @error('permissions') is-invalid @enderror" id="permission" data-live-search="true" multiple>
                                                    @foreach(\App\Models\Permission::all() as $permission)
                                                        <option value="{{$permission->id}}" data-content="<span class='badge badge-primary'>{{$permission->label}} - {{$permission->name}}</span>"></option>
                                                    @endforeach
                                                </select>
                                                @error('permissions')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="roles">نقش‌ها</label>
                                                <select name="roles[]" class="form-control selectpicker @error('roles') is-invalid @enderror" id="roles" data-live-search="true" multiple>
                                                    @foreach(\App\Models\Role::all() as $role)
                                                        <option value="{{$role->id}}" data-content="<span class='badge badge-primary'>{{$role->label}} - {{$role->name}}</span>"></option>
                                                    @endforeach
                                                </select>
                                                @error('roles')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endcan
                                    <button type="submit" class="btn btn-primary">افزودن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection