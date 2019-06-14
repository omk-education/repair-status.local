@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Редактирование заказа
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.orders.update', $item->id) }}" method="POST">
                        <fieldset {{ ($item->status == 'Ремонт закрыт') ? "disabled" : ""}}>
                            @csrf
                            @method('PUT')

                            @include('admin.orders.partials.form')
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
