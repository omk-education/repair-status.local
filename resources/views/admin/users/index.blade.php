@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Пользователи
                        <a class="btn btn-success float-right"
                            href="{{ route('admin.users.create') }}">
                            Добавить
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ф.И.О.</th>
                                <th scope="col">Должность</th>
                                <th scope="col" class="text-right">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td class="text-right">
                                        {{-- Кнопки для действий --}}
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.users.edit', $item->id) }}">
                                            Редактировать
                                        </a>
                                        <a class="btn btn-secondary mr-1"
                                            href="{{ route('admin.users.show', $item->id) }}">
                                            Просмотреть
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $item->id) }}"
                                                method="post" class="float-right">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">
                                                Удалить
                                            </button>
                                        </form>
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
