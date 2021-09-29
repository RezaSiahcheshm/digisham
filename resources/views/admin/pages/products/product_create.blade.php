@extends('layouts.admin-master')
@section('content')
    <div class="layout-y-spacing row mt-4 mx-0">
        <div class="col-xl-9 mx-auto">
            <form action="{{route('admin.products.store')}}" method="post" id="general-info" class="section general-info">
                @csrf
                <div class="widget">
                    <div class="widget-header col-12 p-0">
                        <h4>افزودن محصول جدید</h4>
                    </div>
                    <div class="form-row info m-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 d-flex d-md-block">
                            <div class="upload pr-md-2 mx-auto pb-3 pb-md-0 ">
                                {{--<p><i class="flaticon-cloud-upload mr-1"></i> آپلود عکس</p>--}}
                                <input name="image" type="file" class="dropify " id="input-file-max-fs" data-default-file="{{asset('/images/300x300.jpg')}}" alt="product image" data-max-file-size="2M" data-height="220"/>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="form-row">
                                <div class="form-group col-sm-5">
                                    <label for="title">نام غذا</label>
                                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror " id="title" value="{{old('title')}}" placeholder="نام" autocomplete="title" autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="cafe_id">رستوران</label>
                                    <select name="cafe_id" class="form-control selectpicker @error('cafe_id') is-invalid @enderror" data-live-search="true">
                                        @foreach($cafes as $cafe)
                                            <option value="{{$cafe->id}}" {{(old('cafe_id')== $cafe->id) ? 'selected' : ''}}>{{$cafe->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cafe_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="price">قیمت غذا</label>
                                    <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price')}}" placeholder="قیمت" autocomplete="price" autofocus>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="description">توضیحات محصول</label>
                                    <textarea name="description" class="form-control textarea @error('description') is-invalid @enderror" id="description" maxlength="225" rows="4" placeholder="توضیحات" autofocus>{{old('description')}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-1">افزودن</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection






{{--<div class="form-group col-sm-4">--}}
{{--    <label for="view_count">تعداد بازدید</label>--}}
{{--    <input name="view_count" type="text" class="form-control @error('view_count') is-invalid @enderror " id="view_count" value="{{old('view_count')}}" placeholder="تعداد بازدید" autocomplete="view_count" autofocus>--}}
{{--    @error('view_count')--}}
{{--    <span class="invalid-feedback" role="alert">--}}
{{--        <strong>{{ $message }}</strong></span>--}}
{{--    @enderror--}}
{{--</div>--}}



