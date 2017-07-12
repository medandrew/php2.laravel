<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

/*
 * Class ShowController
 * Класс контроллера репертуара
 *
 * @package App\Http\Controllers
 */
class ShowController extends AdminController
{
    /*
     * Отображает подробную информацию о шоу
     *
     * @param int $count
     */
    public function show(Show $record)
    {
        $data = [
            'title'     => 'Репертуар театра',
            'pagetitle' => 'Репертуар',
            'record'    => $record
        ];
        return view('templates.show', $data);
    }

    /*
     * Отображает форму добавления шоу
     */
    public function create()
    {
        $data = [
            'title'     => 'Репертуар театра',
            'pagetitle' => 'Добавить шоу',
            'class'     => 'ShowController'
        ];
        return view('admin.templates.create', $data);
    }

    /*
     * Сохраняет шоу в базу
     *
     * @param $request
     */
    public function store(Request $request)
    {
        Show::create($request->all());
        return redirect()->route('admin_shows');
    }

    /*
     * Отображает форму редактирования шоу
     *
     * @param int $id
     */
    public function edit(Show $record)
    {
        $data = [
            'title'     => 'Репертуар театра',
            'pagetitle' => 'Редактировать шоу',
            'record'    => $record,
            'class'     => 'ShowController'
        ];
        return view('admin.templates.edit', $data);
    }

    /*
     * Обновляет запись о шоу в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Show $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_shows');
    }

    /*
     * Удаляет шоу из базы
     *
     * @param int $id
     */
    public function delete(Show $record)
    {
        $record->delete();
        return back();
    }
}