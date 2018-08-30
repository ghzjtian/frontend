{{--新闻 详细页面--}}
<div style="margin-top: 100px">

    <div style="margin-top: 100px ; min-height: 50%">
        <div class="w3-display-container w3-animate-opacity">
            <img src={{\App\Utils\UrlUtils::getImageURL($event->image)}} alt="Boat"
                 style="width:100%;min-height:200px;max-height:400px;">
        </div>

        <div class="w3-container" style="margin: 50px 100px 20px 100px">
            <h1 style="text-align: center"><b>{{ $event->title }}</b></h1>
            <h6 style="text-align: end">{{$event->created_at->format('Y-m-d')}}</h6>
            <h6 style="text-align: center">{!! $event->excerpt !!}</h6>
            <hr/>
            <br/>
            <p>{!! $event->body !!}</p>
        </div>
    </div>
</div>