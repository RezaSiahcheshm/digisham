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
    {{--<script src="{{asset('assets/js/users/account-settings.js')}}"></script>--}}
    <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                {{--<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">--}}
                <div class="row justify-content-center">
                    <div class="col-xl-9 layout-spacing">
                        <form action="{{route('admin.roles.update',$role->id)}}" method="post" id="general-info" class="section general-info" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header lines">
                                    <div class="row col-12 ">
                                        <h4>ویرایش نقش {{ $role->label ?? ''}}</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="form-row">
                                        <div class="form-group col-4 ">
                                            <label for="name">نام نقش</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name',$role->name)}}" placeholder="نام نقش">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-4 ">
                                            <label for="label">کاربرد نقش</label>
                                            <input type="text" name="label" class="form-control @error('label') is-invalid @enderror" id="label" value="{{old('label' ,$role->label) }}" placeholder="کاربرد نقش">
                                            @error('label')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-4 ">
                                            <label for="description">توضیحات نقش</label>
                                            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{old('description',$role->description)}}" placeholder="توضیحات نقش">
                                            @error('description')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="permissions">دسترسی‌ها</label>
                                            <select name="permissions[]" class="form-control selectpicker @error('permissions') is-invalid @enderror" id="permission" data-live-search="true" multiple>
                                                @foreach(\App\Models\Permission::all() as $permission)
                                                    <option value="{{$permission->id}}" data-content="<span class='badge badge-primary'>{{$permission->label}} - {{$permission->name}}</span>" {{in_array($permission->id , $role->permissions->pluck('id')->toArray()) ? 'selected' : '' }}></option>
                                                @endforeach
                                            </select>
                                            @error('permissions')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">ویرایش</button>
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
