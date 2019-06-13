<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Менеджер пользователей
 */
class UserController extends Controller
{
    /**
     * Просмотр списка ресурсов
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::orderBy('name')->get();

        return view('admin.users.index', compact('items'));
    }

    /**
     * Вызов формы создания ресурса
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Сохранение нового ресурса
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());

        return redirect()->route('admin.users.index');
    }

    /**
     * Просмотр одного ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Вызов формы редактирования ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('admin.users.edit', compact('item'));
    }

    /**
     * Обновление данных ресурса
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);

        if ($request['password'] == null) {
            $item->update($request->except('password'));
        } else {
            $request['password'] = bcrypt($request['password']);
            $item->update($request->all());
        }

        return redirect()->route('admin.users.index');
    }

    /**
     * Удаление ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
