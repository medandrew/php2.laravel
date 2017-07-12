<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

/*
 * Class GuestbookController
 * Класс контроллера гостевой книги
 *
 * @package App\Http\Controllers
 */
class GuestbookController extends AdminController
{
    /*
     * Отображает форму добавления сообщения
     */
    public function create()
    {
        $data = [
            'title'     => 'Гостевая книга',
            'pagetitle' => 'Добавить сообщение',
            'class'     => 'GuestbookController'
        ];
        return view('admin.templates.create_message', $data);
    }

    /*
     * Сохраняет сообщение в базу
     *
     * @param $request
     */
    public function store(Request $request)
    {
        Guestbook::create($request->all());
        return redirect()->route('guestbook');
    }

    /*
     * Отображает форму редактирования сообщения
     *
     * @param int $id
     */
    public function edit(Guestbook $record)
    {
        $data = [
            'title'     => 'Гостевая книга театра',
            'pagetitle' => 'Редактировать сообщение',
            'record'    => $record,
            'class'     => 'GuestbookController'
        ];
        return view('admin.templates.edit_message', $data);
    }

    /*
     * Обновляет запись о сообщении в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Guestbook $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_guestbook');
    }

    /*
     * Удаляет сообщение из базы
     *
     * @param int $id
     */
    public function delete(Guestbook $record)
    {
        $record->delete();
        return back();
    }
}