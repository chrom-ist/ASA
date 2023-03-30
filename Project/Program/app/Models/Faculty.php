<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Модель сущности Факультет.
 * 
 * Описывает поля и методы используемые
 * для хранения и управления данными о 
 * факультете.
 */
class Faculty
{
    /**
     * Хранит имя таблицы в БД.
     *
     * @var string
     */
    protected $table = 'Faculty';
}