<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 * Class Feedback
 * Класс модели формы обратной связи
 *
 * @package App\models
 */
class Feedback extends Model
{
    /*
     * Название используемой базы данных
     *
     * @var string
     */
    protected $table = 'feedback';

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