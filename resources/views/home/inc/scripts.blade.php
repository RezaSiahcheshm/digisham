<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2d624b7c4d.js" crossorigin="anonymous"></script>
<script src="{{asset('/js/app.js')}}"></script>
@include('sweet::alert')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
{{--@dd($page_name)--}}
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@yield('script')
@isset($page_name)

    @switch($page_name)
        @case('restaurant')
        {{--RESTAURANT--}}
        <script src="js/bootstrap-number-input.js"></script>
        <script>
            $('input').bootstrapNumber({
                // default, danger, success , warning, info, primary
                downClass: 'danger',
                upClass: 'success',
                center: true
            });
        </script>
        <script>
            var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
            $('.translate').text(function (i, v) {
                var chars = v.split('');
                for (var i = 0; i < chars.length; i++) {
                    if (/\d/.test(chars[i])) {
                        chars[i] = arabicNumbers[chars[i]];
                    }
                }
                return chars.join('');
            })
        </script>

        @break

        @default
        <script>console.log('No custom script available.')</script>
    @endswitch
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endisset