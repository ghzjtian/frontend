<!-- Work Section -->
@if(!$isHomePage||(strcasecmp(setting('gallery.gallery_home_show'),'yes')==0))
    <div class="w3-container" style="padding:10px 16px ; margin:64px 100px 50px 100px" id="gallery">
        <h3 class="w3-center">{{ setting('gallery.gallery_title') }}</h3>


            <?php
            //            如果是在主页，就显示全部的内容,否则就分页显示
            if ($isHomePage) {
                $pictures = \App\Picture::orderBy('updated_at', 'desc')->get();
            } else {
                $paginateNum = intval(setting('glb.paginate'));
                $paginateNum = $paginateNum > 3 ? $paginateNum : 3;
                $paginateNum = $paginateNum < 100 ? $paginateNum : 100;
                $pictures = \App\Picture::orderBy('updated_at', 'desc')->paginate($paginateNum);
            }
            $index = 0;
            ?>
            @foreach($pictures as $key => $picture)
                @if(!$isHomePage||$picture->show_on_home)
                    <?php

                    if ($index % 3 == 0) {
//                        echo $index;
                        echo '<div class="w3-row-padding"/>';
                    }
                    $index++;
                    ?>


                    <div class="w3-third w3-container w3-margin-bottom">
                        <img src={{\App\Utils\UrlUtils::getImageURL($picture->image)}} alt={{$picture->description}} style="width:100%"
                             class="w3-hover-opacity" onclick="onClick(this)">

                    </div>
                    <?php
                    if ($index % 3 == 0) {
                        echo '</div>';
                    }
                    ?>
                @endif
            @endforeach


        @if($isHomePage)
            <h3 class="w3-center">
                <p><a href={{(env('APP_URL')."/galleries")}} class="w3-button w3-khaki"><i
                            class="fa fa-ellipsis-h"> </i> {{setting('glb.button_more')}}</a></p>

            </h3>
        @else
            {{ $pictures->links() }}
        @endif
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
              title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>


    <script>
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>
@endif