{{--errors with multi box and button--}}
{{--@if ($errors->any())--}}
{{--    @foreach($errors->all() as $error)--}}
{{--        <div class="alert alert-danger text-right mb-4 pl-3" role="alert" dir="rtl">--}}
{{--            <button type="button" class="close " data-dismiss="alert" aria-label="Close" style="float: left !important;">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
{{--            </button>--}}
{{--            {{$error}}--}}
{{--        </div>--}}
{{--        <div class="alert alert-arrow-left alert-icon-left alert-light-danger mb-4" role="alert">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
{{--            </button>--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>--}}
{{--            <strong>خطا ! </strong>{{$error}}--}}

{{--        </div>--}}
{{--        <div class="alert alert-outline-danger mb-4" role="alert">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
{{--            </button>--}}
{{--            <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>--}}
{{--            <strong>خطا ! </strong>{{$error}}--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endif--}}
{{--errors with one box and button--}}
@if($errors->any())
    <div class="alert alert-danger text-right pr-0 pl-2 pb-0" dir="rtl">
        <button type="button" class="close pl-1" data-dismiss="alert" aria-label="Close" style="float: left !important;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <ul style="padding-right: 35px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

