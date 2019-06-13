@auth
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            Пользователи
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
            Заказы
        </a>
    </li>
@endauth
