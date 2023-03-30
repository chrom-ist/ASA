<?php

namespace app\Controllers;

use app\Models\Lecturer;

/**
 * Контроллер сущности Преподаватель.
 * 
 * Это класс контроллер сущности Перподаватель, он 
 * отвечает за обработку запросов связанных с изменением 
 * данных в таблице Преподаватель.
 */
class LecturerController
{

    /**
     * Выводит список преподавателей.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Выводит форму для создания записи о новом преподавателе
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Сохраняет запись о новом преподавателе в БД.
     *
     * @param Request  $request
     * @return Response
     */
    public function store(Lecturer $lecturer)
    {

    }

    /**
     * Показывает форму редактирования записи преподавателе
     *
     * @param Department $department
     * @return Response
     */
    public function edit(Lecturer $lecturer)
    {

    }

    /**
     * Изменяет данные о преподавателе в БД.
     *
     * @param Department $department
     * @return void
     */
    public function update(Lecturer $lecturer)
    {

    }

    /**
     * Удаляет данные о преподавателе из БД
     *
     * @param Department $department
     * @return void
     */
    public function destroy(Lecturer $lecturer)
    {

    }
}