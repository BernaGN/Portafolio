<div class="input-group rounded">
    <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search"
        aria-describedby="search-addon" name="buscar" value="{{ $buscar }}" required />
    <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
    </span>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="activo" id="exampleRadios1" value="0"
        {{ $activo == 0 ? 'checked' : '' }} onchange="submit()">
    <label class="form-check-label" for="exampleRadios1">Todos</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="activo" id="exampleRadios2" value="2"
        {{ $activo == 2 ? 'checked' : '' }} onchange="submit()">
    <label class="form-check-label" for="exampleRadios2">Activos</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="activo" id="exampleRadios3" value="1"
        {{ $activo == 1 ? 'checked' : '' }} onchange="submit()">
    <label class="form-check-label" for="exampleRadios3">Inactivos</label>
</div>
