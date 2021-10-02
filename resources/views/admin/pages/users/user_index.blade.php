@extends('layouts.admin-master')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>لیست کاربران</h4>
{{--                                {{$users->render()}}--}}
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area px-0">
                        <div class="table-responsive mb-4 style-1 ">
                            <table id="style-1" class="table style-3 table-hover ">
                                <thead>
                                <tr>
                                    <th class="checkbox-column">-</th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">نام خانوادگی</th>
                                    <th class="text-center">عکس</th>
                                    <th class="text-center">سمت</th>
                                    <th class="text-center">جنسیت</th>
                                    <th class="text-center">نام کاربری</th>
                                    <th class="text-center">شماره موبایل</th>
                                    <th class="text-center">وضعیت حساب</th>
                                    <th class="text-center">تاریخ ثبت نام</th>
                                    <th class="text-center">آخرین بازدید</th>
                                    <th class="text-center">اکشن</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="checkbox-column"> 1</td>
                                        <td class="user-name">{{$user->name}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td class="">
                                            <a class="profile-img" href="javascript: void(0);">
                                                <img src="{{asset('/images/90x90.jpg')}}" alt="product">
                                            </a>
                                        </td>
                                        @if($user->accessLevel === 'MC')
                                            <td class="text-center">مدیر شرکت</td>
                                        @elseif($user->accessLevel === 'MR')
                                            <td class="text-center">مدیر رستوران</td>
                                        @elseif($user->accessLevel === 'SC')
                                            <td class="text-center">کارمند شرکت</td>
                                        @elseif($user->accessLevel === 'SR')
                                            <td class="text-center">کارمند رستوران</td>
                                        @else
                                            <td class="text-center">کاربر</td>
                                        @endif
                                        @if($user->gender === 'M')
                                            <td class="text-center">مرد</td>
                                        @elseif($user->gender === 'F')
                                            <td class="text-center">زن</td>
                                        @else
                                            <td class="text-center"></td>
                                        @endif
                                        <td class="text-center">{{$user->username}}</td>
                                        <td>{{$user->mobile}}</td>
                                        @if($user->status === 'S')
                                            <td class="text-center">تعلیق</td>
                                        @elseif($user->status === 'B')
                                            <td class="text-center">مسدود</td>
                                        @else
                                            <td class="text-center">فعال</td>
                                        @endif
                                        <td>{{$user->created_at}}</td>
                                        <td class="text-center">
                                            <span class="shadow-none badge badge-primary">{{$user->lastSeen}}</span>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('admin.users.index')}}/{{$user->id}}" method="post" class="table-controls">
                                                @csrf
                                                @method('DELETE')
                                                <li>
                                                    <a href="{{route('admin.users.index')}}/{{$user->id}}/edit" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </tbody>
    </div>


@endsection
