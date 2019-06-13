@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Создание пользователя
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf

                        @include('admin.users.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
