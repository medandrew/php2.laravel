<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Guestbook
 * Класс модели гостевой книги
 *
 * @package App\models
 */
class Guestbook extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'guestbook';

    /*
     * Список свойств для заполнения
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message'
    ];
}