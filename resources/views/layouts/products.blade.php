{{--在 产品页显示的 Products --}}
{{-- style="margin-top: 100px" ,让列表跟顶部之间有间隔  --}}
{{--在主页，是否显示产品--}}
@if(!$isHomePage||(strcasecmp(setting('product.product_home_show'),'yes')==0))
    <div style="margin-top: 100px">
        <h3 class="w3-center">{{setting('product.product_title')}}</h3>
        @foreach( (App\Product::where('status','PUBLISHED') ->get()) as $product)
            @if(!$isHomePage||$product->show_on_home)
                <div class="w3-card-4 w3-margin" style="padding:18px 16px" id="products">
                    <div class="w3-row-padding"  onclick="javascript:location.href='{{env('APP_URL')."/products/".$product->id}}'">
                        {{--图片是否靠右--}}
                        @if($product->image_align_right)
                            <div class="w3-col m6">
                                <h3>{{ $product->title }}</h3>
                                <p>{!! $product->excerpt  !!}</p>
                                <p><a href={{env('APP_URL')."/products/".$product->id}} class="w3-button w3-black"><i
                                            class="fa fa-th"> </i> {{setting('glb.button_detail')}}</a></p>
                            </div>
                            <div class="w3-col m6">
                                <img class="w3-image w3-round-large"
                                     src={{\App\Utils\UrlUtils::getImageURL($product->image)}}
                                             alt="Buildings" width="400" height="394">
                            </div>
                        @else
                            <div class="w3-col m6">
                                <img class="w3-image w3-round-large"
                                     src={{\App\Utils\UrlUtils::getImageURL($product->image)}}
                                             alt="Buildings" width="400" height="394">
                            </div>
                            <div class="w3-col m6">
                                <h3>{{ $product->title }}</h3>
                                <p>{!! $product->excerpt  !!}</p>
                                <p><a href={{env('APP_URL')."/products/".$product->id}} class="w3-button w3-black"><i
                                            class="fa fa-th"> </i> {{setting('glb.button_detail')}}</a></p>
                            </div>

                        @endif
                    </div>
                </div>
            @endif
        @endforeach
        @if($isHomePage)
            <h3 class="w3-center">
                <p><a href={{(env('APP_URL')."/products")}} class="w3-button w3-khaki"><i
                            class="fa fa-ellipsis-h"> </i> {{setting('glb.button_more')}}</a></p>

            </h3>
        @endif
    </div>

    {{--<script>--}}
        {{--// Modal Image Gallery--}}
        {{--function onClick(element) {--}}
            {{--// document.getElementById("img01").src = element.src;--}}
            {{--// document.getElementById("modal01").style.display = "block";--}}
            {{--// var captionText = document.getElementById("caption");--}}
            {{--// captionText.innerHTML = element.alt;--}}

        {{--}--}}
    {{--</script>--}}

@endif