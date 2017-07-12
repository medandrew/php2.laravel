<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Event
 * Класс модели события
 *
 * @package App\models
 */
class Event extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'events';

    /*
     * Список свойств для заполнения
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'text'
    ];
}
