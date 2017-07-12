    {{ csrf_field() }}

    @if(!empty($record->id))
        Id:
        <input type="text" name="id" value="<?php if (!empty($record->id)) { echo $record->id; } ?>" readonly>
    @endif

    Дата:
    <input type="date" name="date" value="<?php if(!empty($record->created_at)){ echo $record->created_at; } else { echo date('Y-m-d'); }?>" required>

    @if(isset($authors))
        Автор:
        <select name="author_id">
            <option value=""></option>

            @foreach($authors as $author)
                <option value="{{ $author->id }}" <?php if(isset($record->author_id) && ($record->author_id === $author->id)) { ?>selected<?php } ?>>{{ $author->name }}</option>
            @endforeach

        </select>
    @endif

    Заголовок / Имя:
    <input type="text" name="title" value="<?php if (!empty($record->title)) { echo $record->title; } ?>" required>

    Текст:
    <textarea name="text" required><?php if(!empty($record->text)){ echo $record->text; } ?></textarea>

    <input type="submit" value="Отправить">
