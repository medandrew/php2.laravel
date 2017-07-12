<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

/*
 * Class EventController
 * Класс контроллера событий
 *
 * @package App\Http\Controllers
 */
class EventController extends AdminController
{
    /*
     * Отображает подробную информацию о событии
     *
     * @param int $count
     */
    public function show(Event $record)
    {
        $data = [
            'title'     => 'События театра',
            'pagetitle' => 'События',
            'record'    => $record
        ];
        return view('templates.event', $data);
    }

    /*
     * Отображает форму добавления события
     */
    public function create()
    {
        $data = [
            'title'     => 'События театра',
            'pagetitle' => 'Добавить событие',
            'class'     => 'EventController'
        ];
        return view('admin.templates.create', $data);
    }

    /*
     * Сохраняет событие в базу
     *
     * @param $request
     */
    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect()->route('admin_events');
    }

    /*
     * Отображает форму редактирования события
     *
     * @param int $id
     */
    public function edit(Event $record)
    {
        $data = [
            'title'     => 'События театра',
            'pagetitle' => 'Редактировать событие',
            'record'    => $record,
            'class'     => 'EventController'
        ];
        return view('admin.templates.edit', $data);
    }

    /*
     * Обновляет запись о событии в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Event $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_events');
    }

    /*
     * Удаляет событие из базы
     *
     * @param int $id
     */
    public function delete(Event $record)
    {
        $record->delete();
        return back();
    }
}