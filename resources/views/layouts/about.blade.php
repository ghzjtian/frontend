<!-- About Section -->
<div class="w3-container w3-light-grey w3-padding-64" id="about">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3>{{setting('about.title')}}</h3>
            <p>{!! setting('about.content') !!}</p>
        </div>
        <div class="w3-col m6">
            @foreach( (App\About::where('show','1') ->get()) as $ability)
                <p class="w3-wide"><i class="{{$ability->icon}} w3-margin-right"></i>{{$ability->title}}</p>
                <div class="w3-grey">
                    <?php
                    $MyAbility = $ability->ability;
                    if ($MyAbility > 100) {
                        $MyAbility = 100;
                    } elseif ($MyAbility < 0) {
                        $MyAbility = 0;
                    }
                    ?>
                    <div class="w3-container w3-dark-grey w3-center" style="width:{{$MyAbility}}%">{{$MyAbility}}%</div>
                </div>
            @endforeach


        </div>
    </div>
</div>
