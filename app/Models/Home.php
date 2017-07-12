<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Home
 * Класс модели домашней страницы
 *
 * @package App\models
 */
class Home extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'home';

    /*
     * Список свойств для заполнения
     *
     * @var array
     */
    protected $fillable = [
        'header',
        'title',
        'text',
        'link'
    ];
}