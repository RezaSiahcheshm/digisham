@extends('layouts.admin-master')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 style-1">
                            <table id="style-1" class="table style-3 table-hover ">
                                <thead>
                                <tr>
                                    <th class="checkbox-column">تعداد</th>
                                    <th>نام رستوران</th>
                                    <th>کد اختصاصی رستوران</th>
                                    <th>وضعیت کار رستوران</th>
                                    <th>نوع رستوران</th>
                                    <th>مالک رستوران</th>
                                    <th>مدیر رستوران</th>
                                    <th>تاریخ ثبت رستوران</th>
                                    <th>تاریخ ویرایش رستوران</th>
                                    <th>اکشن</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($cafes)
                                    @foreach($cafes as $cafe)
                                        <tr>
                                            <td class="checkbox-column"></td>
                                            <td class="user-name">{{$cafe->name}}</td>
                                            <td>{{$cafe->code}}</td>
                                            <td>{{$cafe->status}}</td>
                                            <td>{{$cafe->type}}</td>
                                            <td>{{$cafe->owner}}</td>
                                            <td>{{$cafe->manager}}</td>
                                            <td>{{$cafe->created_at}}</td>
                                            <td>{{$cafe->updated_at}}</td>
                                            <td>
                                                <form action="{{route('admin.cafe.index')}}/{{$cafe->id}}" method="post" class="table-controls">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li>
                                                        <a href="{{route('admin.cafe.index')}}/{{$cafe->id}}/edit" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button style="background: white; padding: 0 15px 0 0; border: 0 white ; color: white" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
