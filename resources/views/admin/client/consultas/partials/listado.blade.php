<div class="todo-content position-relative px-4 mx-n4" id="todo-content">
    <div class="todo-task" id="todo-task">
        <div class="table-responsive">
            <table class="table align-middle position-relative table-nowrap">
                <thead class="table-active">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha y hora de consulta</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody id="task-list">
                    @if ($consultas->isEmpty())
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-warning" role="alert">
                                    No tienes consultas por el momento
                                </div>
                            </td>
                        </tr>
                    @else
                        @foreach ($consultas as $consulta)
                            <tr>
                                <td></td>
                                <td>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="form-check">
                                                <label class="form-check-label" for="nombre-{{ $consulta->id }}">{{ $consulta->con_nombres }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="form-check">
                                                <label class="form-check-label" for="apellido-{{ $consulta->id }}">{{ $consulta->con_apellidos }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="form-check">
                                                <label class="form-check-label" for="dni-{{ $consulta->id }}">{{ $consulta->con_numero_dni }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary text-uppercase">
                                        {{ \Carbon\Carbon::parse($consulta->created_at)->locale('es')->timezone('America/Lima')->isoFormat('DD [de] MMMM [del] YYYY [a las] hh:mm A') }}
                                    </span>
                                </td>
                                <td>
                                    @if ($consulta->estado == 1)
                                        <span class="badge bg-danger text-uppercase">
                                            Pendiente
                                        </span>
                                    @else
                                        <span class="badge bg-success text-uppercase">
                                            Respondido
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <div class="hstack gap-2">
                                        <button class="btn btn-sm btn-soft-primary remove-list" data-bs-toggle="modal" data-bs-target="#viewTaskItemModal" data-remove-id="{{ $consulta->id }}">
                                            <i class="ri-eye-fill align-bottom"></i>
                                        </button>
                                        <button class="btn btn-sm btn-soft-warning remove-list" data-bs-toggle="modal" data-bs-target="#markAsReadTaskItemModal" data-remove-id="{{ $consulta->id }}">
                                            <i class="ri-check-fill align-bottom"></i> Marcar como leído
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
    <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
        <h5 class="mt-4">Sorry! No Result Found</h5>
    </div>
</div>
