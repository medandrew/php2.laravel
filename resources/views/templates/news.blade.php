@extends('index')

@section('content')
<!--========================================================
                          CONTENT
=========================================================-->
    <section class="content">
        <div class="main left">
            <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>

            @if(!$records->isEmpty())
                @foreach($records as $record)

                    <div class="news">
                        <div class="clearfix">
                            <div class="time left">
                                <span>{{ $record->created_at }}</span>
                            </div>
                            <h3><a href="/news/{{ $record->id }}/show">{{ $record->title }}</a></h3>
                            <div class="info">
                                Автор:

                                @foreach($authors as $author)
                                    @if(isset($record->author_id) && ($record->author_id === $author->id))
                                        {{ $author->name }}
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="clearfix">
                            {!! strip_tags(mb_substr($record->text, 0, 600) . '...') !!}
                            <a class="more" href="/news/{{ $record->id }}/show">подробнее...</a>
                        </div>
                    </div>

                @endforeach
            @endif

            <div class="pagination">{!! $records->render() !!}</div>

        </div>

        @include('_common._archives')

    </section>

@stop