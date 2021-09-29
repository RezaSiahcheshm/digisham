@extends('layouts.admin-master')
@section('content')
    <div class="layout-y-spacing row mt-4 mx-0">
        <div class="col-xl-9 mx-auto">
            <form action="{{route('admin.products.update',$product->id)}}" method="post" id="general-info" class="section general-info">
                @csrf
                @method('PATCH')
                <div class="widget">
                    <div class="widget-header col-12 p-0">
                        <h4>ویرایش محصول {{ $product->title }}</h4>
                    </div>
                    <div class="form-row info m-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 d-flex d-md-block">
                            <div class="upload pr-md-2 mx-auto pb-3 pb-md-0 ">
                                {{--<p><i class="flaticon-cloud-upload mr-1"></i> آپلود عکس</p>--}}
                                <input name="upload" type="file" class="dropify " id="input-file-max-fs" data-default-file="{{asset($product->image ?? '/images/300x300.jpg')}}" alt="product image" data-max-file-size="2M" data-height="220"/>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="form-row">
                                <div class="form-group col-sm-5">
                                    <label for="title">نام محصول</label>
                                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror " id="title" value="{{old('title', $product->title)}}" placeholder="نام" autocomplete="title" autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="price">قیمت محصول</label>
                                    <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price',$product->price)}}" placeholder="قیمت" autocomplete="price" autofocus>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="inventory">تعداد موجودی</label>
                                    <input name="inventory" type="text" class="form-control @error('inventory') is-invalid @enderror " id="inventory" value="{{old('inventory',$product->inventory)}}" placeholder="موجودی" autocomplete="inventory" autofocus>
                                    @error('inventory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="description">توضیحات محصول</label>
                                    <textarea name="description" class="form-control textarea @error('description') is-invalid @enderror" id="description" maxlength="225" rows="4" placeholder="توضیحات" autofocus>{{old('description',$product->description)}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-1">ویرایش</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



