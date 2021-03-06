@extends('layouts.plantilla')


@section('contenido')
    <div class="content-wrapper">
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('auditorias.show', $audit) }}
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">Ver Auditoria</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('auditorias.index') }}"> Regresar</a>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <strong>User Type:</strong>
                                {{ $audit->user_type }}
                            </div>
                            <div class="form-group">
                                <strong>User Id:</strong>
                                {{ $audit->user_id }}
                            </div>
                            <div class="form-group">
                                <strong>Event:</strong>
                                {{ $audit->event }}
                            </div>
                            <div class="form-group">
                                <strong>Auditable Type:</strong>
                                {{ $audit->auditable_type }}
                            </div>
                            <div class="form-group">
                                <strong>Auditable Id:</strong>
                                {{ $audit->auditable_id }}
                            </div>
                            <div class="form-group">
                                <strong>Old Values:</strong>
                                {{ $audit->old_values }}
                            </div>
                            <div class="form-group">
                                <strong>New Values:</strong>
                                {{ $audit->new_values }}
                            </div>
                            <div class="form-group">
                                <strong>Url:</strong>
                                {{ $audit->url }}
                            </div>
                            <div class="form-group">
                                <strong>Ip Address:</strong>
                                {{ $audit->ip_address }}
                            </div>
                            <div class="form-group">
                                <strong>User Agent:</strong>
                                {{ $audit->user_agent }}
                            </div>
                            <div class="form-group">
                                <strong>Tags:</strong>
                                {{ $audit->tags }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
