@if(!$baners->isEmpty())

    <div class="news clearfix">

        @foreach($baners as $baner)

            <div class="box">
                <h2>{{ $baner->header }}</h2>
                <div class="box1">
                    <img src="/images/index/{{ $baner->id }}.png" alt=""/>
                    <div class="box2">
                        <h3>
                            <a href="#">{!! $baner->title !!}</a>
                        </h3>
                        {!! $baner->text !!}
                        <a href="{{ $baner->link }}" class="more">more</a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endif