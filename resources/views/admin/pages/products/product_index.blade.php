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
                                    <th class="text-center">ایدی</th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">توضیحات</th>
                                    <th class="text-center">قیمت</th>
                                    <th class="text-center">رستوران</th>
                                    <th class="text-center">ثبت کننده</th>
                                    <th class="text-center">اکشن</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="checkbox-column"></td>
                                        <td class="text-center">{{$product->id}}</td>
                                        <td class="text-center user-name">{{$product->title}}</td>
                                        <td class="text-center">{{$product->description}}</td>
                                        <td class="text-center">{{$product->price}}</td>
                                        <td class="text-center">{{$product->productable->name}}</td>
                                        <td class="text-center">{{$product->user->name.' '.$product->user->lastname}}</td>
                                        <td class="text-center">
                                            <form action="{{route('admin.products.index')}}/{{$product->id}}" method="post" class="table-controls">
                                                @csrf
                                                @method('DELETE')
                                                <li>
                                                    <a href="{{route('admin.products.index')}}/{{$product->id}}/edit" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
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
