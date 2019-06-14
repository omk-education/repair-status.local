<div class="form-group">
    <label for="number">Номер заказа</label>
    <input type="text" id="number"
            class="form-control @error('number') is-invalid @enderror"
            name="number" value="{{ $item->number ?? old('number') }}"
            {{ isset($item) ? "disabled" : "" }}>
</div>
<div class="form-group">
    <label for="description">Описание заказа</label>
    <textarea class="form-control @error('description') is-invalid @enderror"
                id="description" name="description"
                rows="3" {{ isset($item) ? "disabled" : "" }}
                >{{ $item->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <label for="diagnostics ">Результат диагностики оборудования</label>
    <textarea class="form-control @error('diagnostics ') is-invalid @enderror"
                id="diagnostics " name="diagnostics "
                rows="3" {{ ($item->status == 'Ремонт завершен') ? "disabled" : ""}}
                >{{ $item->diagnostics  ?? old('diagnostics ') }}</textarea>
</div>
<div class="form-group">
    <label for="notice">Примечание</label>
    <textarea class="form-control @error('notice') is-invalid @enderror"
                id="notice" name="notice"
                rows="3" {{ ($item->status == 'Ремонт завершен') ? "disabled" : ""}}
                >{{ $item->notice ?? old('notice') }}</textarea>
</div>

<div class="form-group">
    <label for="master">Мастер</label>
    <select id="master" name="master"
            class="form-control @error('master') is-invalid @enderror"
            {{ ($item->status == 'Ремонт завершен') ? "disabled" : ""}}
            >
        @forelse($masters as $master)
            <option value="{{ $master->id }}"
                    {{ (($item->master ?? old('master')) == $master->id) ? "selected" : "" }}>
                {{ $master->name }}
            </option>
        @empty
        @endforelse
    </select>
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
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
