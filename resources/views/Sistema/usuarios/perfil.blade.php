@extends('layouts.plantilla')


@section('contenido')
    <div class="content-wrapper">
        <form action="{{ route('perfil.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container rounded bg-white mt-5">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="rounded-circle mt-5" src="{{ asset('img/' . $usuario->imagen) }}"
                                style="width:150px;height:150px">
                            <span class="font-weight-bold">{{ $usuario->name }}</span>
                            <span class="text-black-50">{{ $usuario->email }}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre"
                                        value="{{ $usuario->name }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        value="{{ $usuario->email }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="imagen" class="form-control">
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button class="btn btn-primary profile-button" type="submit">Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
