@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Редактирование пользователя
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @include('admin.users.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
