<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Home;
use App\Models\Show;
use App\Models\Actor;
use App\Models\Event;
use App\Models\Author;
use App\Models\Article;
use App\Models\Guestbook;
use Illuminate\Http\Request;

/*
 * Class HomeController
 * Класс контроллера страниц сайта
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /*
     * Отображает страницу index
     */
    public function index()
    {
        $data = [
            'title'   => 'Главная страница',
            'tickets' => 'Онлайн-билеты',
            'welcome' => 'Добро пожаловать',
            'latest'  => 'Новости',
            'baners'  => Home::all(),
            'records' => Article::latest()->limit(3)->get()->reverse()
        ];
        return view('templates.index', $data);
    }

    /*
     * Отображает страницу news
     */
    public function news()
    {
        $data = [
            'title'     => 'Новости театра',
            'pagetitle' => 'Новости',
            'records'   => Article::latest()->paginate(5),
            'authors'   => Author::all()
        ];
        return view('templates.news', $data);
    }

    /*
     * Отображает страницу shows
     */
    public function shows()
    {
        $data = [
            'title'      => 'Репертуар театра',
            'pagetitle'  => 'Репертуар',
            'showstitle' => 'Популярные шоу',
            'records'    => Show::all()
        ];
        return view('templates.shows', $data);
    }

    /*
     * Отображает страницу events
     */
    public function events()
    {
        $data = [
            'title'     => 'События театра',
            'pagetitle' => 'События',
            'records'   => Event::latest()->paginate(3)
        ];
        return view('templates.events', $data);
    }

    /*
     * Отображает страницу actors
     */
    public function actors()
    {
        $data = [
            'title'     => 'Актеры театра',
            'pagetitle' => 'Актеры',
            'records'   => Actor::latest()->paginate(6)
        ];
        return view('templates.actors', $data);
    }

    /*
     * Отображает страницу guestbook
     */
    public function guestbook()
    {
        $data = [
            'title'     => 'Гостевая книга театра',
            'pagetitle' => 'Гостевая книга',
            'formtitle' => 'Оставить сообщение',
            'records'   => Guestbook::latest()->paginate(5),
            'count'     => Guestbook::count()
        ];
        return view('templates.guestbook', $data);
    }

    /*
     * Отображает страницу feedback
     */
    public function feedback()
    {
        $data = [
            'title'     => 'Контакты театра',
            'pagetitle' => 'Контакты',
            'formtitle' => 'Напишите нам',
            'class'     => 'HomeController'
        ];
        return view('templates.contacts', $data);
    }
}