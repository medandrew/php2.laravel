<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Show
 * Класс модели шоу
 *
 * @package App\models
 */
class Show extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'shows';

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