@extends('layouts.plantilla')


@section('contenido')
    <div class="content-wrapper">
        {{ Breadcrumbs::render('users.update', $usuario) }}
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @include('layouts.error')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Editar Usuario</span>
                        </div>
                        <div class="card-body">
                            {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'put', 'id' => 'formulario']) !!}
                            <label class="h5">Nombre</label>
                            <input class="form-control" name="name" id="name" value="{{ $usuario->name }}" required>
                            <label class="h5">Apellido Paterno</label>
                            <input class="form-control" name="apellido_paterno" id="apellido_paterno"
                                value="{{ $usuario->apellido_paterno }}" required>
                            <label class="h5">Apellido Materna</label>
                            <input class="form-control" name="apellido_materno" id="apellido_materno"
                                value="{{ $usuario->apellido_materno }}" required>
                            <label class="h5">Email</label>
                            <input class="form-control" name="email" type="text" value="{{ $usuario->email }}" required>
                            <label class="h5">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <h2 class="h5">Lista de roles</h2>
                            @foreach ($roles as $rol)
                                <label>
                                    <input type="radio" name="roles[]" value="{{ $rol->id }}" required
                                        {{ $rol->id == $usuario->roles->first()->id ? 'checked' : '' }}>
                                    {{ $rol->name }}
                                </label>
                            @endforeach
                            <br>
                            <button type="button" class="btn btn-primary btn-sm mt-2" role="dialog" data-bs-toggle="modal"
                                data-bs-target="#confirm-editar">
                                Guardar
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
