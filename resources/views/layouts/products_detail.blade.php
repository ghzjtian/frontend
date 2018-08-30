{{--产品详细页面--}}
<div style="margin-top: 100px ; min-height: 50%">
    <div class="w3-display-container w3-animate-opacity">
        <img src={{\App\Utils\UrlUtils::getImageURL($product->image_large)}} alt="Boat"
             style="width:100%;min-height:200px;max-height:400px;">
    </div>

    <div class="w3-container" style="margin: 50px 100px 20px 100px">
        <h1 style="text-align: center "><b>{{ $product->title }}</b></h1>
        <h6 style="text-align: center">{!! $product->excerpt !!}</h6>
        <hr/>
        <br>
        <p>{!! $product->body !!}</p>
    </div>
</div>