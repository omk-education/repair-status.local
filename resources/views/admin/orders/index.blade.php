@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Заказы
                        <a class="btn btn-success float-right"
                            href="{{ route('admin.orders.create') }}">
                            Добавить
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Номер</th>
                                <th scope="col">Статус</th>
                                <th scope="col" class="text-right">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->number }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="text-right">
                                        {{-- Кнопки для действий --}}
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.orders.edit', $item->id) }}">
                                            Редактировать
                                        </a>
                                        <a class="btn btn-secondary mr-1"
                                            href="{{ route('admin.orders.show', $item->id) }}">
                                            Просмотреть
                                        </a>
                                        @can('admin')
                                        <form action="{{ route('admin.orders.destroy', $item->id) }}"
                                                method="post" class="float-right">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">
                                                Удалить
                                            </button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Нет пользователей
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
