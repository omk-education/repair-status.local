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
                    @isset($item)
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Номер заказа:</th>
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
                        </tbody>
                    </table>
                    @endisset
                    @unless($item)
                        <p>Неверный номер заказа</p>
                    @endunless


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
