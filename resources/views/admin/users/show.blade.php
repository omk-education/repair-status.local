@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Информация о пользователе
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Поле</th>
                                <th>Данные</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">ID:</th>
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Имя пользователя:</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Электронный адрес:</th>
                                <td>{{ $item->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Должность:</th>
                                <td>{{ $item->position }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата создания:</th>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата редактирования:</th>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
