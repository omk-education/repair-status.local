<div class="form-group">
    <label for="number">Номер заказа</label>
    <input type="text" id="number"
            class="form-control @error('number') is-invalid @enderror"
            name="number" value="{{ $item->number ?? old('number') }}"
            {{ isset($item) ? "readonly" : "" }}>
            @error('number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

</div>
<div class="form-group">
    <label for="description">Описание заказа</label>
    <textarea class="form-control @error('description') is-invalid @enderror"
                id="description" name="description"
                rows="3" {{ isset($item) ? "readonly" : "" }}
                >{{ $item->description ?? old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="form-group">
    <label for="diagnostics ">Результат диагностики оборудования</label>
    <textarea class="form-control @error('diagnostics ') is-invalid @enderror"
                id="diagnostics " name="diagnostics "
                rows="3" {{ (isset($item) && $item->status == 'Ремонт завершен') ? "readonly" : ""}}
                >{{ $item->diagnostics  ?? old('diagnostics ') }}</textarea>
            @error('diagnostics')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="form-group">
    <label for="notice">Примечание</label>
    <textarea class="form-control @error('notice') is-invalid @enderror"
                id="notice" name="notice"
                rows="3" {{ (isset($item) && $item->status == 'Ремонт завершен') ? "readonly" : ""}}
                >{{ $item->notice ?? old('notice') }}</textarea>
            @error('notice')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>

<div class="form-group">
    <label for="master">Мастер</label>
    <select id="master" name="master"
            class="form-control @error('master') is-invalid @enderror"
            {{ ( isset($item) && $item->status == 'Ремонт завершен') ? "readonly" : ""}}
            >
        @forelse($masters as $master)
            <option value="{{ $master->id }}"
                    {{ (($item->master ?? old('master')) == $master->id) ? "selected" : "" }}>
                {{ $master->name }}
            </option>
        @empty
        @endforelse
    </select>
    @error('master')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="status">Статус заказа</label>
    <select id="status" name="status"
            class="form-control @error('status') is-invalid @enderror">
        <option value="В ремонте"
                {{ (($item->status ?? old('status')) == 'В ремонте') ? "selected" : "" }}>
            В ремонте
        </option>
        <option value="Требует согласования"
                {{ (($item->status ?? old('status')) == 'Требует согласования') ? "selected" : "" }}>
            Требует согласования
        </option>
        <option value="Ремонт завершен"
                {{ (($item->status ?? old('status')) == 'Ремонт завершен') ? "selected" : "" }}>
            Ремонт завершен
        </option>
        <option value="Ремонт закрыт"
                {{ (($item->status ?? old('status')) == 'Ремонт закрыт') ? "selected" : "" }}>
            Ремонт закрыт
        </option>
    </select>
    @error('status')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
