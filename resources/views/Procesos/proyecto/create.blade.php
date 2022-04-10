@extends('layouts.plantilla')


@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('servicio.store') }}

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proyectos.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('Procesos.proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
