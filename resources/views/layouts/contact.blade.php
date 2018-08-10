<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">{{setting('contact.title')}}</h3>
    <p class="w3-center w3-large">{{setting('contact.detail')}}</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> {{setting('contact.location')}}</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> {{setting('contact.phone')}}</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> {{setting('contact.email')}}</p>
            <br>
            <form action="/email/send" target="_blank" method="POST">
                @csrf
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('contact.input_name')}} required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('contact.input_email')}} required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('contact.input_subject')}} required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder={{setting('contact.input_message')}} required name="Message"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> {{setting('contact.input_send')}}
                    </button>
                </p>
            </form>
        </div>
        <div class="w3-half">
            <!-- Add Google Maps -->
        {{--<div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>--}}
        <!--百度地图生成器 http://api.map.baidu.com/lbsapi/creatmap/ -->

            @include('layouts.baiduMap',['longitude'=>setting('contact.longitude'),'latitude'=>setting('contact.latitude'),'map_title'=>setting('contact.map_title'),'map_content'=>setting('contact.map_content')])
        </div>
    </div>
</div>

