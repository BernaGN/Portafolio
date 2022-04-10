@extends('layouts.plantilla')


@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('cliente.show', $categoria) }}
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
