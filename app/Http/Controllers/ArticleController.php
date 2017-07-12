<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;

/*
 * Class ArticleController
 * Класс контроллера новостей
 *
 * @package App\Http\Controllers
 */
class ArticleController extends AdminController
{
    /*
     * Отображает подробную информацию о новости
     *
     * @param int $count
     */
    public function show(Article $record)
    {
        $data = [
            'title'     => 'Новости театра',
            'pagetitle' => 'Новости',
            'record'    => $record,
            'authors'   => Author::all()
        ];
        return view('templates.article', $data);
    }

    /*
     * Отображает форму добавления новости
     */
    public function create()
    {
        $data = [
            'title'     => 'Новости театра',
            'pagetitle' => 'Добавить новость',
            'authors'   => Author::all(),
            'class'     => 'ArticleController'
        ];
        return view('admin.templates.create', $data);
    }

    /*
     * Сохраняет новость в базу
     *
     * @param $request
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect()->route('admin_news');
    }

    /*
     * Отображает форму редактирования новости
     *
     * @param int $id
     */
    public function edit(Article $record)
    {
        $data = [
            'title'     => 'Новости театра',
            'pagetitle' => 'Добавить новость',
            'record'    => $record,
            'authors'   => Author::all(),
            'class'     => 'ArticleController'
        ];
        return view('admin.templates.edit', $data);
    }

    /*
     * Обновляет запись новости в базе
     *
     * @param $request
     * @param $request
     */
    public function update(Request $request, Article $record)
    {
        $record->update($request->all());
        return redirect()->route('admin_news');
    }

    /*
     * Удаляет новость из базы
     *
     * @param int $id
     */
    public function delete(Article $record)
    {
        $record->delete();
        return back();
    }
}