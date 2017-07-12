@extends('admin.index')

@section('content')
<!--========================================================
                      CONTENT
=========================================================-->
<section class="content">
    <h2>{{ $pagetitle }}</h2>

    <h3><a href="/admin/{{ $method }}/create/">{{ $create }}</a></h3>

    <table class="admin">
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Телефон</th>
            <th>Сообщение</th>
            <th>Дата</th>
            <th colspan="2">Действие</th>
        </tr>

        @foreach($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td>{{ $record->message }}</td>
                <td>{{ $record->created_at }}</td>
                <td><a href="/admin/{{ $method }}/{{ $record->id }}/edit">Редактировать</a></td>
                <td><a href="/admin/{{ $method }}/{{ $record->id }}/delete">Удалить</a></td>
            </tr>
        @endforeach

    </table>

    <div class="pagination">{!! $records->render() !!}</div>

</section>
@stop