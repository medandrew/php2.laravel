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
    </section>

@stop