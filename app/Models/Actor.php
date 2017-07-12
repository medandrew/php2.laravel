<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Actor
 * Класс модели актера
 *
 * @package App\models
 */
class Actor extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'actors';

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