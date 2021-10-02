<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
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

        @case('information')
        {{--INFORMATION--}}
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript">
            window.onload = function initialize() {
                var myLatlng = new google.maps.LatLng(35.736581, 51.328005);
                var mapOptions = {
                    zoom: 17,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<div class="py-2 pr-2" style="direction: rtl; text-align: right; ">' +
                    '<h5 class="m-0">شمرون کباب</h5>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'شمرون کباب'
                });

                infowindow.open(map, marker);
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }
        </script>
        @break

        @default
        <script>console.log('No custom script available.')</script>
    @endswitch
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endisset