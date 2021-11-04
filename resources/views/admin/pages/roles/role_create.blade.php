@extends('layouts.admin-master')
@section('style')
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
    <script src="{{asset('assets/js/users/account-settings.js')}}"></script>
    <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection
@section('content')
    <div class="layout-y-spacing row mt-4 mx-0">
        <div class="col-xl-9 mx-auto">
            <form action="{{route('admin.roles.store')}}" method="post" id="general-info" class="section general-info" enctype="multipart/form-data">
                @csrf
                <div class="widget">
                    <div class="widget-header col-12 p-0">
                        <h4>افزودن نقش جدید</h4>
                    </div>
                    <div class="info">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="name">نام نقش</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="نام نقش">
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-4 ">
                                <label for="label">کاربرد نقش</label>
                                <input type="text" name="label" class="form-control @error('label') is-invalid @enderror" id="label" value="{{old('label')}}" placeholder="کاربرد نقش">
                                @error('label')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-4 ">
                                <label for="description">توضیحات نقش</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{old('description')}}" placeholder="توضیحات نقش">
                                @error('description')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-12 ">
                                <label for="permissions">دسترسی‌ها</label>
                                <select name="permissions[]" class="form-control selectpicker @error('permissions') is-invalid @enderror" id="permission" data-live-search="true" multiple>
                                    @foreach(\App\Models\Permission::all() as $permission)
                                        <option value="{{$permission->id}}" data-content="<span class='badge badge-primary'>{{$permission->label}} - {{$permission->name}}</span>"></option>
{{--                                        <option value="{{$permission->id}}">{{$permission->label}} - {{$permission->name}}</option>--}}
                                    @endforeach
                                </select>
                                @error('permissions')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">افزودن</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
