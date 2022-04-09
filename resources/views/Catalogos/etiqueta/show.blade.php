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


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
