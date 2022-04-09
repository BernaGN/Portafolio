@extends('layouts.plantilla')


@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                {{ Breadcrumbs::render('etiqueta.update', $etiqueta) }}

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Etiqueta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('etiquetas.update', $etiqueta->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Catalogos.etiqueta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
