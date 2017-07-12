<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Show;
use App\Models\Actor;
use App\Models\Event;
use App\Models\Author;
use App\Models\Article;
use App\Models\Feedback;
use App\Models\Guestbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

/*
 * Class HomeController
 * Класс контроллера админ-панели
 *
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /*
     * Отображает страницу index
     */
    public function index()
    {
        $data = [
            'title'     => 'Главная страница',
            'pagetitle' => 'Главная'
        ];
        return view('admin.templates.index', $data);
    }

    /*
     * Отображает страницу news
     */
    public function news()
    {
        $data = [
            'title'     => 'Новости театра',
            'pagetitle' => 'Новости',
            'create'    => 'Добавить новость',
            'method'    => 'news',
            'records'   => Article::orderBy('id', 'desc')->paginate(10),
            'authors'   => Author::all()
        ];
        return view('admin.templates.news', $data);
    }

    /*
     * Отображает страницу shows
     */
    public function shows()
    {
        $data = [
            'title'     => 'Репертуар театра',
            'pagetitle' => 'Репертуар',
            'create'    => 'Добавить шоу',
            'method'    => 'shows',
            'records'   => Show::latest()->paginate(10)
        ];
        return view('admin.templates.table', $data);
    }

    /*
     * Отображает страницу events
     */
    public function events()
    {
        $data = [
            'title'     => 'События театра',
            'pagetitle' => 'События',
            'create'    => 'Добавить событие',
            'method'    => 'events',
            'records'   => Event::latest()->paginate(10)
        ];
        return view('admin.templates.table', $data);
    }

    /*
     * Отображает страницу actors
     */
    public function actors()
    {
        $data = [
            'title'     => 'Актеры театра',
            'pagetitle' => 'Актеры',
            'create'    => 'Добавить актера',
            'method'    => 'actors',
            'records'   => Actor::latest()->paginate(10)
        ];
        return view('admin.templates.table', $data);
    }

    /*
     * Отображает страницу guestbook
     */
    public function guestbook()
    {
        $data = [
            'title'     => 'Гостевая книга театра',
            'pagetitle' => 'Гостевая книга',
            'create'    => 'Добавить сообщение',
            'method'    => 'guestbook',
            'records'   => Guestbook::orderBy('id', 'desc')->paginate(10)
        ];
        return view('admin.templates.contacts', $data);
    }

    /*
     * Отображает страницу feedback
     */
    public function feedback()
    {
        $data = [
            'title'     => 'Контакты театра',
            'pagetitle' => 'Контакты',
            'create'    => 'Добавить сообщение',
            'method'    => 'feedback',
            'records'   => Feedback::latest()->paginate(10)
        ];
        return view('admin.templates.contacts', $data);
    }
}