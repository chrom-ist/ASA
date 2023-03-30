<?php

namespace app\Controllers;

use app\Models\Department;

/**
 * Контроллер сущности Кафедра.
 * 
 * Это класс контроллер сущности Кафедра, он 
 * отвечает за обработку запросов связанных с изменением 
 * данных в таблице Кафедра.
 */
class DepartmentController
{
    /**
     * Выводит список кафедр.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        return view('department.index', ['department' => $department]);
    }

    /**
     * Выводит форму для создания новой кафедры
     *
     * @return Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Сохраняет новую кафедру в БД.
     *
     * @param Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Показывает форму редактирования рессурса
     *
     * @param Department $department
     * @return Response
     */
    public function edit(Department $department)
    {

    }

    /**
     * Изменяет данные о кафедре в БД.
     *
     * @param Department $department
     * @return void
     */
    public function update(Department $department)
    {

    }

    /**
     * Удаляет данные о кафедре из БД
     *
     * @param Department $department
     * @return void
     */
    public function destroy(Department $department)
    {

    }
}