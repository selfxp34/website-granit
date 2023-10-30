<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Auth::user()->tasks()
            ->select(['tasks.id', 'name', 'preview', 'image', 'status_id'])
            ->with('status')
            ->get();
        return view('tasks.list', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /**
         * В форме создания задачи должны выводиться поля:
         * 1) Название задачи
         * 2) Краткое описание задачи
         * 3) Полное описание задачи
         * 4) Приоритет (высокий/обычный)
         * 5) Фото задачи
         */
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Обработчик данных
        // 1. Считать данные с формы
        $data = $request->all();

        // 2. Записать данные в таблицу БД
        $task = new \App\Models\Task();
        $task->name = $data['name'];
        $task->preview = $data['preview'];
        $task->text = $data['text'];
        $task->priority = isset($data['priority']);
        $task->image = $data['file']->store('images');
        $task->status_id = 1;
        $task->save();

        // Привязать авторизованного пользователя к задаче
        $task->users()->attach(Auth::id());

        // 3. Перенаправить на страницу со списком задач
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Вывод данных задачи $task
        $task = \App\Models\Task::with(['status', 'comments'])->find($id);
        if (Auth::user()->can('show', $task)) {
            return view('tasks.show', ['task' => $task]);
        } else {
            abort(403, 'Нет прав для просмотра задачи');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Вывод формы редактирования задачи $id
        // 1. Получить данные задачи $task из БД
        // 2. Вывести вьюшку с формой с данными задачи
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Обработчик данных
        // 1. Считать из данные из формы
        // 2. Записать данные в БД, изменив существующие данные задачи $id
        // 3. Перенаправить на нужную страницу
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // 1. Найти задачу по id в БД
        // 2. Удалить эту задачу из БД
        // 3. Редирект на список задач
    }
}
