<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Requests\Order\StoreOrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Просмотр списка ресурсов
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('master')) {
            $items = Order::where([
                ['master', Auth::id()],
                ['status', '<>', 'Ремонт закрыт']
            ])->get();
        } else {
            $items = Order::all();
        }

        return view('admin.orders.index', compact('items'));
    }

    /**
     * Вызов формы создания ресурса
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masters = User::select('id', 'name')
                            ->where('role', 'master')
                            ->orWhere('role', 'admin')
                            ->get();

        return view('admin.orders.create', compact('masters'));
    }

    /**
     * Сохранение нового ресурса
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create($request->all());

        return redirect()->route('admin.orders.index');
    }

    /**
     * Просмотр одного ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Order::findOrFail($id);
        $master = User::where('id', $item->master)->first();

        return view('admin.orders.show', compact('item', 'master'));
    }

    /**
     * Вызов формы редактирования ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Order::findOrFail($id);
        $masters = User::select('id', 'name')
                            ->where('role', 'master')
                            ->orWhere('role', 'admin')
                            ->get();

        return view('admin.orders.edit', compact('item', 'masters'));
    }

    /**
     * Обновление данных ресурса
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $item = Order::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('admin.orders.index');
    }

    /**
     * Удаление ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.orders.index');
    }
}
