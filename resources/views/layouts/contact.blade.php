<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">{{setting('contact.title')}}</h3>
    <p class="w3-center w3-large">{{setting('about.detail')}}</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> {{setting('about.location')}}</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> {{setting('about.phone')}}</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> {{setting('about.email')}}</p>
            <br>
            <form action="#" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('about.input_name')}} required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('about.input_email')}} required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('about.input_subject')}} required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('about.input_message')}} required name="Message"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> {{setting('about.input_send')}}
                    </button>
                </p>
            </form>
        </div>
        <div class="w3-half">
            <!-- Add Google Maps -->
        {{--<div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>--}}
        <!--百度地图生成器 http://api.map.baidu.com/lbsapi/creatmap/ -->
            @include('layouts.baiduMap')
        </div>
    </div>
</div>


<!-- Add Google Maps -->
<script>
    function myMap() {
        myCenter = new google.maps.LatLng(41.878114, -87.629798);
        var mapOptions = {
            center: myCenter,
            zoom: 12, scrollwheel: false, draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->