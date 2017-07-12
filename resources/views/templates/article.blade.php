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
                    {!! $record->text !!}
                </div>
            </div>

        </div>

        @include('_common._archives')

    </section>

@stop