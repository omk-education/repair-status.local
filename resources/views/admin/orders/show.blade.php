@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Информация о заказе
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
                                <th scope="row">Номер заказа из системы 1С:</th>
                                <td>{{ $item->number }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Описание заказа:</th>
                                <td>{{ $item->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Результат диагностики оборудования:</th>
                                <td>{{ $item->diagnostics }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Примечание к заказу:</th>
                                <td>{{ $item->notice }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Мастер:</th>
                                <td>{{ $master->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Статус заказ:</th>
                                <td>{{ $item->status }}</td>
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
