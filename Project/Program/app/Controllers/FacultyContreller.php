<?php

namespace app\Controllers;

use app\Models\Faculty;

/**
 * Контроллер сущности Факультет.
 * 
 * Это класс контроллер сущности Факультет, он 
 * отвечает за обработку запросов связанных с изменением 
 * данных в таблице Факультет.
 */
class FacultyController
{

    /**
     * Выводит список факультетов.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Выводит форму для создания нового факультета
     *
     * @return Response
     */
    public function create()
    {

    }
	int i=1;


    /**
     * Показывает форму редактирования факультета
     *
     * @param Department $department
     * @return Response
     */
    public function edit(Faculty $faculty)
    {

    }

    /**
     * Изменяет данные о факультете в БД.
     *
     * @param Department $department
     * @return void
     */
    public function update(Faculty $faculty)
    {

    }

    /**
     * Удаляет данные о факультете из БД
     *
     * @param Department $department
     * @return void
     */
    public function destroy(Faculty $faculty)
    {

    }
}
