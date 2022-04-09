@extends('layouts.plantilla')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection


@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                {{ Breadcrumbs::render('users.index') }}
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h2><i class="fas fa-users"></i> Usuarios</h2>
                            </span>

                            <div class="float-right">
                                @can('usuarios.store')
                                    <button type="button" class="btn btn-sm btn-primary"
                                        class="btn btn-primary btn-sm float-right" data-placement="left" data-bs-toggle="modal"
                                        data-bs-target="#modal-agregar">
                                        <i class="fas fa-plus"></i> Agregar
                                    </button>
                                @endcan
                            </div>
                        </div>
                    </div>
                    @include('layouts.error')
                    @if ($usuarios->count())
                        <div class="card-body">
                            <form action="{{ route('usuarios.index') }}" method="GET">
                                @include('layouts.buscador')
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="usuarios">
                                    <thead class="thead">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Nombre
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Rol
                                            </th>
                                            <th>
                                                Fecha de creacion
                                            </th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>
                                                    <strong>{{ $usuario->id }}</strong>
                                                </td>
                                                <td>
                                                    {{ $usuario->fullName }}
                                                </td>
                                                <td>
                                                    {{ $usuario->email }}
                                                </td>
                                                <td>
                                                    {{ $usuario->roles->first()->name }}
                                                </td>
                                                <td>
                                                    {{ $usuario->created_at->diffForHumans() }}
                                                </td>
                                                <td>
                                                    @if ($usuario->deleted_at != null)
                                                        <span class="badge badge-pill badge-danger">Inactivo</span>
                                                    @else
                                                        <span class="badge badge-pill badge-success">Activo</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-warning dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            @if ($usuario->deleted_at == null)
                                                                @can('usuarios.update')
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('usuarios.edit', $usuario->id) }}"><i
                                                                            class="fa fa-fw fa-edit"></i>
                                                                        Editar
                                                                    </a>
                                                                @endcan
                                                                @can('usuarios.destroy')
                                                                    <form
                                                                        action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                                        method="post" class="submit-prevent-from-eliminar">
                                                                        <a type="submit" class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#confirm-delete"
                                                                            data-id="{{ $usuario->id }}">
                                                                            <i class="fa fa-fw fa-trash"></i>
                                                                            Eliminar
                                                                        </a>
                                                                        @method('DELETE')
                                                                        @csrf
                                                                    </form>
                                                                @endcan
                                                            @else
                                                                <form action="{{ route('user-restore', $usuario->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit"
                                                                        class="dropdown-item">Activar</button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    @else
                        <div class="card-body"><strong>No hay registros</strong></div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

    </div>

    </div>
    <div class="modal fade" id="modal-agregar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Usuario</h4>
                </div>
                <div class="modal-body">
                    @include('Sistema.usuarios.create')
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('usuarios.destroy', $usuarios->first()) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header"> Eliminar </div>
                    <div class="modal-body">
                        <label>¿Quieres Eliminar el registro?</label>
                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        @include('layouts.confirm-agregar')

    @endsection


    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
        <script>
            $('#confirm-delete').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var modal = $(this)
                modal.find('.modal-body #id').val(id)
            })
        </script>
        <script>
            $('#usuarios').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar " + `<select class="custom-select custom-select-sm form-control form-control-sm">
        <option value='10'>10</option>
        <option value='25'>25</option>
        <option value='50'>50</option>
        <option value='100'>100</option>
        <option value='-1'>Todos</option>
    </select>` +
                        " registros por pagina",
                    "zeroRecords": "Nada encontrado - Disculpe",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles ",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior",
                    }
                }
            });
        </script>
    @endsection
