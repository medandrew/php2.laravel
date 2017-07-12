@extends('index')

@section('content')
<!--========================================================
                          CONTENT
=========================================================-->
    <section class="content">
        <div class="main left">
            <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>

            <div class="news">
                <div class="clearfix">
                    <div class="time left">
                        <span>{{ $record->created_at }}</span>
                    </div>
                    <h3>{{ $record->title }}</h3>
                </div>
                <div class="clearfix">
                    {!! $record->text !!}
                </div>
            </div>

        </div>
        <aside class="list left">
            <h2>Archives</h2>
            <ul class="list">
                <li><a href="#">Июнь 2017</a></li>
                <li><a href="#">Май 2017</a></li>
                <li><a href="#">Апрель 2017</a></li>
                <li><a href="#">Март 2017</a></li>
                <li><a href="#">Февраль 2017</a></li>
                <li><a href="#">Январь 2017</a></li>
                <li><a href="#">Декабрь 2016</a></li>
                <li><a href="#">Ноябрь 2016</a></li>
                <li><a href="#">Октябрь 2016</a></li>
                <li><a href="#">Сентябрь 2016</a></li>
            </ul>
        </aside>
    </section>
@stop