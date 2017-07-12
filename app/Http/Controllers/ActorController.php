<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

/*
 * Class ActorController
 * Класс контроллера актеров
 *
 * @package App\Http\Controllers
 */
class ActorController extends AdminController
{
    /*
     * Отображает подробную информацию об актере
     *
     * @param int $count
     */
    public function show(Actor $record)
    {
        $data = [
            'title'     => 'Актеры театра',
            'pagetitle' => 'Актеры',
            'record'    => $record
        ];
        return view('templates.actor', $data);
    }

    /*
     * Отображает форму добавления информации об актере
     */
    public function create()
    {
        $data = [
            'title'     => 'Актеры театра',
            'pagetitle' => 'Добавить актера',
            'class'     => 'ActorController'
        ];
        return view('admin.templates.create', $data);
    }

    /*
     * Сохраняет информацию об актере в базу
     *
     * @param $request
     */
    public function store(Request $request)
    {
        Actor::create($request->all());
        return redirect()->route('admin_actors');
    }

    /*
     * Отображает форму редактирования информации об актере
     *
     * @param int $id
     */
    public function edit(Actor $record)
    {
        $data = [
            'title'     => 'Актеры театра',
            'pagetitle' => 'Редактировать актера',
            'record'    => $record,
            'class'     => 'ActorController'
        ];
        return view('admin.templates.edit', $data);
    }

    /*
     * Обновляет запись об актере в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Actor $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_actors');
    }

    /*
     * Удаляет запись об актере из базы
     *
     * @param int $id
     */
    public function delete(Actor $record)
    {
        $record->delete();
        return back();
    }
}