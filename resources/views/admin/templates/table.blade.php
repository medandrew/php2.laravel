@extends('admin.index')

@section('content')
<!--========================================================
                      CONTENT
=========================================================-->
<section class="content">
    <h2>{{ $pagetitle }}</h2>

    <div class="pagination">{!! $records->render() !!}</div>

    <h3><a href="/admin/{{ $method }}/create">{{ $create }}</a></h3>

    <table class="admin">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Описание</th>
            <th>Дата</th>
            <th colspan="2">Действие</th>
        </tr>

        @foreach($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->title }}</td>
                <td>{!! strip_tags(mb_substr($record->text, 0, 200) . '...') !!}</td>
                <td>{{ $record->created_at }}</td>
                <td><a href="/admin/{{ $method }}/{{ $record->id }}/edit">Редактировать</a></td>
                <td><a href="/admin/{{ $method }}/{{ $record->id }}/delete">Удалить</a></td>
            </tr>
        @endforeach

    </table>

</section>
@stop