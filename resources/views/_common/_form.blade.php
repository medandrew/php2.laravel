{{ csrf_field() }}

@if(!empty($record->id))
    Id:
    <input type="text" name="id" value="<?php if (!empty($record->id)) { echo $record->id; } ?>" readonly>
@endif

@if(!empty($record->created_at))
    Дата:
    <input type="date" name="date" value="<?php if(!empty($record->created_at)){ echo $record->created_at; } else { echo date('Y-m-d'); }?>" required>
@endif

Имя:
<input type="text" name="name" id="name" placeholder="Имя*" value="<?php if (!empty($record->name)) { echo $record->name; } ?>" required>

E-mail:
<input type="email" name="email" id="email" placeholder="E-mail*" value="<?php if (!empty($record->email)) { echo $record->email; } ?>" required>

Телефон:
<input type="text" name="phone" placeholder="Телефон" value="<?php if (!empty($record->phone)) { echo $record->phone; } ?>">

Сообщение:
<textarea name="message" id="message" placeholder="Сообщение*" required><?php if (!empty($record->message)) { echo $record->message; } ?></textarea>

<input type="submit" value="Отправить">
