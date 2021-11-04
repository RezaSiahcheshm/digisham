@extends('layouts.admin-master')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
@endsection
@section('script')
    <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
    <script>
        // var e;
        c1 = $('#style-1').DataTable({
            // headerCallback: function (e, a, t, n, s) {
            //     e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-info m-auto ">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            // },
            // columnDefs: [{
            //     targets: 0, width: "30px", className: "", orderable: !1, render: function (e, a, t, n) {
            //         return '<label class="new-control new-checkbox checkbox-outline-info  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            //     }
            // }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو...",
                "sLengthMenu": "نتایج  :  _MENU_",
            },
            "lengthMenu": [3, 5, 10, 15, 20, 50],
            "pageLength": 15
        });
        multiCheck(c1);
    </script>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>لیست دسترسی</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area px-0">
                        <div class="table-responsive mb-4 style-1 ">
                            <table id="style-1" class="table style-3 table-hover ">
                                <thead>
                                <tr>
                                    {{--<th class="checkbox-column">-</th>--}}
                                    <th class="text-center"></th>
                                    <th class="text-center">نام</th>
                                    <th class="text-center">کاربرد</th>
                                    <th class="text-center">توضیحات</th>
                                    {{--<th class="text-center">ثبت کننده</th>--}}
                                    <th class="text-center">اکشن</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($num = 1)
                                @foreach($permissions as $permission)
                                    <tr>
                                        {{--<td class="checkbox-column"></td>--}}
                                        <td class="text-center">{{$num ++}}</td>
                                        <td class="text-center user-name">{{$permission->name}}</td>
                                        <td class="text-center">{{$permission->label}}</td>
                                        <td class="text-center">{{$permission->description}}</td>
                                        {{--<td class="text-center">{{$permission->user->name.' '.$permission->user->lastname}}</td>--}}
                                        <td class="text-center">
                                            <form action="{{route('admin.permissions.destroy',$permission->id)}}" method="post" class="table-controls">
                                                @csrf
                                                @method('DELETE')
                                                <li>
                                                    <a href="{{route('admin.permissions.edit',$permission->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
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
