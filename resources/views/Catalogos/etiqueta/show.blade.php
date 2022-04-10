@extends('layouts.plantilla')


@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('etiqueta.show', $etiqueta) }}
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Etiqueta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('etiquetas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>id:</strong>
                            {{ $etiqueta->id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $etiqueta->informacion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $etiqueta->informacion->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de creacion:</strong>
                            {{ $etiqueta->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de modificacion:</strong>
                            {{ $etiqueta->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
