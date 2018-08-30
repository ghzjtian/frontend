<!-- Team Section -->

@if(!$isHomePage||(strcasecmp(setting('news.news_home_show'),'yes')==0))
    <div class="w3-container" style="padding:128px 16px ; margin:64px 150px 50px 150px ; min-height: 50%" id="news">
        <h3 class="w3-center">{{setting('news.news_title')}}</h3>


        <?php
        //            如果是在主页，就显示全部的内容
        if ($isHomePage) {
            $events = \App\Event::where('status', 'PUBLISHED')->orderBy('updated_at', 'desc')->get();
        } else {
            $paginateNum = intval(setting('glb.paginate'));
            $paginateNum = $paginateNum > 3 ? $paginateNum : 3;
            $paginateNum = $paginateNum < 100 ? $paginateNum : 100;

            $events = \App\Event::where('status', 'PUBLISHED')->orderBy('updated_at', 'desc')->paginate($paginateNum);
        }
        ?>

        @foreach( $events as $event)
            @if(!$isHomePage||$event->show_on_home)
                <div class="w3-card-4 w3-margin"
                     onclick="javascript:location.href='{{env('APP_URL')."/events/".$event->id}}'">
                    <img src={{\App\Utils\UrlUtils::getImageURL($event->image)}} alt="Nature" style="width:100%"
                         height="300">
                    <div class="w3-container">
                        <h3><b>{{$event->title}}</b></h3>
                        <h5>
                            <span class="w3-opacity">{{$event->created_at->format('Y-m-d')}}</span></h5>
                    </div>
                    <div class="w3-container">
                        <p>{!! $event->excerpt !!} </p>
                    </div>
                </div>
            @endif
        @endforeach
        @if($isHomePage)
            <h3 class="w3-center">
                <p><a href={{(env('APP_URL')."/events")}} class="w3-button w3-khaki"><i
                            class="fa fa-ellipsis-h"> </i> {{setting('glb.button_more')}}</a></p>

            </h3>
        @else
            {{ $events->links() }}
        @endif

    </div>
@endif