<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*
 * Class Article
 * Класс модели новости
 *
 * @package App\models
 */
class Article extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'news';

    /*
     * Список свойств для заполнения
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'title',
        'text'
    ];
}