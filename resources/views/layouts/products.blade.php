{{--在 产品页显示的 Products --}}
{{-- style="margin-top: 100px" ,让列表跟顶部之间有间隔  --}}
<div style="margin-top: 100px">
    <h3 class="w3-center">{{setting('glb.product_title')}}</h3>
    @foreach( (App\Product::where('status','PUBLISHED') ->get()) as $product)
        <div class="w3-card-4 w3-margin" style="padding:18px 16px" id="products">
            <div class="w3-row-padding">
                {{--图片是否靠右--}}
                @if($product->image_align_right)
                    <div class="w3-col m6">
                        <h3>{{ $product->title }}</h3>
                        <p>{{$product->excerpt}}</p>
                        <p><a href="#products" class="w3-button w3-black"><i
                                        class="fa fa-th"> </i> {{setting('glb.button_more')}}</a></p>
                    </div>
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src={{\App\Utils\UrlUtils::getImageURL($product->image)}}
                                alt="Buildings" width="400" height="394">
                    </div>
                @else
                    <div class="w3-col m6">
                        <img class="w3-image w3-round-large" src={{\App\Utils\UrlUtils::getImageURL($product->image)}}
                                alt="Buildings" width="400" height="394">
                    </div>
                    <div class="w3-col m6">
                        <h3>{{ $product->title }}</h3>
                        <p>{{$product->excerpt}}</p>
                        <p><a href="#products" class="w3-button w3-black"><i
                                        class="fa fa-th"> </i> {{setting('glb.button_more')}}</a></p>
                    </div>

                @endif
            </div>
        </div>

    @endforeach
{{--        @dd($product)--}}
</div>