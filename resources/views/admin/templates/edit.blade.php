@extends('admin.index')

@section('content')
<!--========================================================
                          CONTENT
=========================================================-->
    <section class="content">
        <div class="main left">
            <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>

            <form action="{{ action($class . '@update',['id' => $record->id]) }}" method="post" class="edit">

                @include('_common._form_edit')

            </form>
        </div>
    </section>

@stop