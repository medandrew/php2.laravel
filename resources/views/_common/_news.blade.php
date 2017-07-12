@if(!$records->isEmpty())

    @foreach($records as $record)

        <div class="news clearfix">

            <div class="time left">
                <span>{{ $record->created_at }}</span>
            </div>

            <h3>
                <a href="/news/{{ $record->id }}/show">{{ $record->title }}</a>
            </h3>
            <p>{!! strip_tags(mb_substr($record->text, 0, 60) . '...') !!}</p>
            <a class="more" href="/news/{{ $record->id }}/show">подробнее...</a>

        </div>

    @endforeach

@endif