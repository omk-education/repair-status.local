<div class="form-group">
    <label for="name">Имя пользователя</label>
    <input type="text" id="name"
            class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ $item->name ?? old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="form-group">
    <label for="email">Адрес электронной почты</label>
    <input type="text" id="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email" value="{{ $item->email ?? old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input type="text" id="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="form-group">
    <label for="role">Роль пользователя</label>
    <select id="role" name="role"
            class="form-control @error('role') is-invalid @enderror">
        <option value="admin"
                {{ (($item->role ?? old('role')) == 'admin') ? "selected" : "" }}>
            Администратор
        </option>
        <option value="master"
                {{ (($item->role ?? old('role')) == 'master') ? "selected" : "" }}>
            Мастер по ремонту
        </option>
        <option value="seller"
                {{ (($item->role ?? old('role')) == 'seller') ? "selected" : "" }}>
            Продавец-консультант
        </option>
    </select>
    @error('role')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
