@extends('layouts.plantilla')


@section('contenido')
    <div class="content-wrapper">
        <section class="content container-fluid">
            <div class="">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('roles.update', $role) }}
                    @includeif('partials.errors')
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Editar Rol</span>
                        </div>
                        <div class="card-body">
                            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'put', 'id' => 'formulario']) !!}
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Ingrese el nombre del rol" value="{{ $role->name }}" required>
                            </div>
                            <h2 class="h3">Lista de Permisos</h2>
                            <ul class="columns">
                                @foreach ($permisos as $permiso)
                                    <li>
                                        {!! Form::checkbox('permissions[]', $permiso->id, null, ['class' => 'mr-1']) !!} {{ $permiso->description }}
                                    </li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn btn-primary btn-sm mt-2" role="dialog" data-bs-toggle="modal"
                                data-bs-target="#confirm-editar">
                                Editar
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.confirm-editar')
@endsection
