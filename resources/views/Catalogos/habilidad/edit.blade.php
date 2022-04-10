@extends('layouts.plantilla')


@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('habilidad.update', $habilidad) }}

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Habilidad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('habilidades.update', $habilidad->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Catalogos.habilidad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
