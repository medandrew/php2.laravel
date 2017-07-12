@extends('index')

@section('content')
<!--========================================================
                      CONTENT
=========================================================-->
    @include('_common._carousel')

    <section class="content">

        @include('_common._baner')

        <div class="clearfix">
            <aside class="tickets left">
                <h2>{{ $tickets }}</h2>
                <h3>
                    <a href="#">Lorem ipsum dolor sit amet, consec teer adipiscent vestibulum.</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, conc tetur adipi scing. Praesent vestibuum molstie lacuiirhs. Aenean non ummy dreriauris. Phasellllus. porta. Fusce suscipit variusium sociis totdna tibus et magis dis parturient montes, nas.</p>
                <div class="list">
                    <div class="label">A.</div>
                    <p><a href="#">Lorem ipsum dolor sit ametnsec teer adipiscent vestibulum.</a></p>
                </div>
                <div class="list">
                    <div class="label">B.</div>
                    <p><a href="#">Lorem ipsum dolor sit ametnsec teer adipiscent vestibulum.</a></p>
                </div>
                <div class="list">
                    <div class="label">C.</div>
                    <p><a href="#">Lorem ipsum dolor sit ametnsec teer adipiscent vestibulum.</a></p>
                </div>
                <a class="more" href="#">more-info</a>
            </aside>
            <div class="welcome left">
                <h2>{{ $welcome }}</h2>
                <h3><a href="#">dolor sit amet, consec teer adipiscent vestibulum.</a></h3>

                <div class="person left">
                    <img src="/images/index/5.png" alt=""/>
                    <h3><a href="#">John sommersmith</a></h3>
                    <p>Loremip ipsum dolor sit am.</p>
                </div>
                <div class="person">
                    <img src="/images/index/6.png" alt=""/>
                    <h3><a href="#">tomas simpson</a></h3>
                    <p>Praesent vestibulmolestie.</p>
                </div>
                <p>Consec tetuer adipicing it. Praesebul natoque penatibus et gnis dent mo ntessetuidiculu. Nulladuice feugiat  malesuada odiopolo. Morbnc odiof,  gravida at, cursus na loruodem.
                    Loremip ipsum dolor sit amet, consec tetuer ng elit. Praesent. Praesebul natoque penatibus et gnis dent mo ntessetuidiculu.</p>
            </div>
            <aside class="lastnews left">
                <h2>{{ $latest }}</h2>

                @include('_common._news')

            </aside>
        </div>
    </section>
@stop