<div class="form-group">
    <label for="name">Имя пользователя</label>
    <input type="text" id="name"
            class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ old('name') }}">
</div>
<div class="form-group">
    <label for="email">Адрес электронной почты</label>
    <input type="text" id="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email" value="{{ old('email') }}">
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input type="text" id="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password" value="{{ old('password') }}">
</div>
<div class="form-group">
    <label for="role">Роль пользователя</label>
    <select id="role" name="role"
            class="form-control @error('role') is-invalid @enderror">
        <option value="admin">Администратор</option>
        <option value="master">Мастер по ремонту</option>
        <option value="seller">Продавец-консультант</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
