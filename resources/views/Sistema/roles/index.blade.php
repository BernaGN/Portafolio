@extends('layouts.plantilla')


@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                {{ Breadcrumbs::render('roles.index') }}
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h2><i class="fas fa-user-tag"></i> Roles</h2>
                            </span>

                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-primary"
                                    class="btn btn-primary btn-sm float-right" data-placement="left" data-bs-toggle="modal"
                                    data-bs-target="#modal-agregar">
                                    <i class="fas fa-plus"></i> Agregar
                                </button>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @include('layouts.error')
                    @if ($roles->count())
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Rol
                                            </th>
                                            @can('roles.update')
                                                <th>
                                                </th>
                                            @endcan
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $rol)
                                            <tr>
                                                <td>
                                                    <strong>{{ $rol->id }}</strong>
                                                </td>
                                                <td>
                                                    {{ $rol->name }}
                                                </td>
                                                @can('roles.update')
                                                    <td>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('roles.edit', $rol->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        @else
                            <div class="card-body"><strong>No hay registros</strong></div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

    </div>

    <div class="modal fade" id="modal-agregar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Rol</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('Sistema.roles.create')
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    @include('layouts.confirm-agregar')
@endsection
