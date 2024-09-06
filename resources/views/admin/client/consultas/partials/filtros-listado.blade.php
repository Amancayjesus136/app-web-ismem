<div class="row mb-4">
    <div class="col-auto order-1 d-block d-lg-none">
        <button type="button" class="btn btn-soft-success btn-icon btn-sm fs-16 file-menu-btn">
            <i class="ri-menu-2-fill align-bottom"></i>
        </button>
    </div>
    <div class="col-sm order-3 order-sm-2 mt-3 mt-sm-0">
    </div>
</div>
<div class="p-3 bg-light rounded mb-4">
    <div class="row g-2">
        <div class="d-flex justify-content-sm-end gap-2">
            <div class="col-12">
                <form action="{{ route('general.consultas_list') }}" method="GET" class="d-flex gap-2">
                    <div class="row w-100">
                        <div class="col-6">
                            <div class="search-box ms-2">
                                <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ request('search') }}">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        <div class="col-2">
                            <select class="form-control" name="filter" data-choices data-choices-search-false>
                                <option value="Todos" {{ request('filter') == 'Todos' ? 'selected' : '' }}>Todos</option>
                                <option value="Hoy" {{ request('filter') == 'Hoy' ? 'selected' : '' }}>Hoy</option>
                                <option value="Ayer" {{ request('filter') == 'Ayer' ? 'selected' : '' }}>Ayer</option>
                                <option value="Últimos 7 días" {{ request('filter') == 'Últimos 7 días' ? 'selected' : '' }}>Últimos 7 días</option>
                                <option value="Últimos 30 días" {{ request('filter') == 'Últimos 30 días' ? 'selected' : '' }}>Últimos 30 días</option>
                                <option value="Este mes" {{ request('filter') == 'Este mes' ? 'selected' : '' }}>Este mes</option>
                                <option value="El año pasado" {{ request('filter') == 'El año pasado' ? 'selected' : '' }}>El año pasado</option>
                            </select>
                        </div>

                        <div class="col-2">
                            <select class="form-control" name="status" data-choices data-choices-search-false>
                                <option value="Todos" {{ request('status') == 'Todos' ? 'selected' : '' }}>Todos</option>
                                <option value="Proceso" {{ request('status') == 'Proceso' ? 'selected' : '' }}>Proceso</option>
                                <option value="Leido" {{ request('status') == 'Leido' ? 'selected' : '' }}>Leído</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <button type="submit" class="btn btn-primary">Aplicar</button>
                        </div>

                        <div class="col-1">
                            @if (request('search') || request('filter') || request('status'))
                                <a href="{{ route('general.consultas_list') }}" class="btn btn-secondary">Limpiar</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

