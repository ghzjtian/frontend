<!-- Team Section -->
{{--产品详细页面--}}
<div style="margin-top: 100px">

    <img src={{\App\Utils\UrlUtils::getImageURL($event->image)}} alt="Nature" style="width:100%">
    <div class="w3-container">
        <h1><b>{{$event->title}}</b></h1>
        <h5>
            <span class="w3-opacity">{{$event->created_at->format('Y-m-d')}}</span></h5>
    </div>
    <div class="w3-container">
        <h5><p>{!! $event->excerpt !!} </p></h5>
    </div>
    <div class="w3-container">
        <p>{!! $event->body !!} </p>
    </div>

</div>
