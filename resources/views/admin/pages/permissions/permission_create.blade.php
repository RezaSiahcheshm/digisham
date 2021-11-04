@extends('layouts.admin-master')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin/tables/custom-table.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/file-upload/file-upload-with-preview.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">
    <style>
        .btn-light {
            border-color: transparent;
        }

        .widget .widget-header {
            border-bottom: 1px solid #ebedf2;
        }

        /*file-upload*/
        .widget-content {
            border-radius: 6px;
        }

        .custom-file-container__image-multi-preview {
            height: 160px;
        }

        .custom-file-container__image-preview {
            height: 402px;
        }

        .custom-file-container__custom-file__custom-file-control {
            border-radius: .4rem;
        }
    </style>
@endsection
@section('script')
    <script src="{{asset('assets/js/users/account-settings.js')}}"></script>
    <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script>
        // file-upload
        var secondUpload = new FileUploadWithPreview('mySecondImage', {
            showDeleteButtonOnImages: true,
            text: {
                chooseFile: "هنوز فایلی انتخاب نشده ..",
                browse: "انتخاب فايل",
                selectedCount: "تا فایل انتخاب شده",
            },
        });
        // textarea-maxlength
        $('.textarea').maxlength({
            placement: "bottom-left-inside",
            alwaysShow: true,
        });
        // SelectList-bootstrap-select
        $('.selectpicker').selectpicker({
            multipleSeparator: " - ",
            // styleBase:"form-control",
            noneSelectedText: "یک گزینه انتخاب کنید",
            noneResultsText: "نتیجه ای یافت نشد.",
            // selectAllText: "یک گزینه انتخاب کنید",
        });
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            $('.selectpicker').selectpicker('mobile');
        }
    </script>
@endsection
@section('content')
    <div class="layout-y-spacing row mt-4 mx-0">
        <div class="col-xl-9 mx-auto">
            <form action="{{route('admin.permissions.store')}}" method="post" id="general-info" class="section general-info" enctype="multipart/form-data">
                @csrf
                <div class="widget">
                    <div class="widget-header col-12 p-0">
                        <h4>افزودن دسترسی جدید</h4>
                    </div>
                    <div class="info">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="name">نام دسترسی</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="نام دسترسی">
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-4 ">
                                <label for="label">کاربرد دسترسی</label>
                                <input type="text" name="label" class="form-control @error('label') is-invalid @enderror" id="label" value="{{old('label')}}" placeholder="کاربرد دسترسی">
                                @error('label')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-4 ">
                                <label for="description">توضیحات دسترسی</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{old('description')}}" placeholder="توضیحات دسترسی">
                                @error('description')
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
