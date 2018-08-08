<!-- Header with full-height image ,首页大图-->
<style>
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        /*如果是默认的 settings url ，就显示默认的图片*/
        background-image:url({{\App\Utils\UrlUtils::getImageURL(setting('glb.big_image'))}});
         min-height: 100%;
    }

</style>
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small">{{setting('glb.big_image_text1')}}</span><br>
        <span class="w3-large">{{setting('glb.big_image_text2')}}</span>
        <p><a href={{setting('glb.big_image_bt_url')}}
                    class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity
              w3-hover-opacity-off">{{setting('glb.big_image_bt_text')}}</a>
        </p>
    </div>

</header>
