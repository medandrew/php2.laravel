<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

/*
 * Class FeedbackController
 * Класс контроллера формы обратной связи
 *
 * @package App\Http\Controllers
 */
class FeedbackController extends AdminController
{
    /*
     * Отображает форму добавления сообщения
     */
    public function create()
    {
        $data = [
            'title'     => 'Обратная связь',
            'pagetitle' => 'Добавить сообщение',
            'class'     => 'FeedbackController'
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
        Feedback::create($request->all());
        return redirect()->route('contacts');
    }

    /*
     * Отображает форму редактирования сообщения
     *
     * @param int $id
     */
    public function edit(Feedback $record)
    {
        $data = [
            'title'     => 'Обратная связь',
            'pagetitle' => 'Редактировать сообщение',
            'record'    => $record,
            'class'     => 'FeedbackController'
        ];
        return view('admin.templates.edit_message', $data);
    }

    /*
     * Обновляет запись о сообщении в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Feedback $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_contacts');
    }

    /*
     * Удаляет сообщение из базы
     *
     * @param int $id
     */
    public function delete(Feedback $record)
    {
        $record->delete();
        return back();
    }
}