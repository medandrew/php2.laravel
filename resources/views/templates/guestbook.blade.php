@extends('index')

@section('content')
<!--========================================================
                       CONTENT
=========================================================-->
    <section class="content">
        <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>

        @if(!$records->isEmpty())
            @foreach($records as $record)

                <div class="news">
                    <div class="clearfix">
                        <div class="guest_time left">
                            <span>{{ $record->created_at }}</span>
                        </div>
                        <div class="info">
                            Автор: <a href="#">{{ $record->name }}</a>
                            Email: <a href="#">{{ $record->email }}</a>
                        </div>
                    </div>
                    <div class="guestbook">
                        {{ $record->message }}
                    </div>
                </div>

            @endforeach
        @endif

        @unset($record)

        <div class="pagination">{!! $records->render() !!}</div>

        <div class="right">Всего сообщений: {{ $count }}</div>

        <h2>{{ $formtitle }}</h2>

        <form action="{{ action('GuestbookController@store') }}" method="post" class="feedback">

            @include('_common._form')

        </form>
    </section>

@stop