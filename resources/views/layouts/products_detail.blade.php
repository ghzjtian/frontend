{{--产品详细页面--}}
<div style="margin-top: 100px">
    <div class="w3-display-container w3-animate-opacity">
        <img src={{\App\Utils\UrlUtils::getImageURL($product->image)}} alt="Boat"
             style="width:100%;min-height:200px;max-height:400px;">
        <div class="w3-display-middle w3-text-white w3-jumbo">{{$product->title}}</div>
        <div class="w3-container w3-display-bottomright w3-text-white w3-large">
            <p>{!! $product->excerpt  !!} </p>
        </div>
    </div>

    <div class="w3-container">
        <h2>{{ $product->title }}</h2>
        <p>{!! $product->body !!}</p>
    </div>
</div>