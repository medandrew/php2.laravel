@extends('index')

@section('content')
<!--========================================================
                         CONTENT
=========================================================-->
    <section class="content">
        <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>

        <div class="pagination">{!! $records->render() !!}</div>

        @if(!$records->isEmpty())
            @foreach($records as $record)

                <div class="event left">
                    <img src="/images/events/{{ $record->id }}.png" alt=""/>
                    <h3><a href="/events/{{ $record->id }}/show">{{ $record->title }}</a></h3>
                    <p>{!! strip_tags(mb_substr($record->text, 0, 200) . '...') !!}</p>
                    <a class="more" href="/events/{{ $record->id }}/show">подробнее...</a>
                </div>

            @endforeach
        @endif

    </section>
@stop