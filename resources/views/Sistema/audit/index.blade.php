@extends('layouts.plantilla')


@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                {{ Breadcrumbs::render('auditorias.index') }}
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Audit') }}
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

                                        <th>Usuario</th>
                                        <th>Evento</th>
                                        <th>Url</th>
                                        <th>Ip</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audits as $audit)
                                        <tr>
                                            <td>{{ $audit->id }}</td>

                                            <td>{{ $audit->user->name }}</td>
                                            @if ($audit->event == 'created')
                                                <td>Creado</td>
                                            @elseif ($audit->event == 'updated')
                                                <td>Editado</td>
                                            @elseif ($audit->event == 'deleted')
                                                <td>Eliminado</td>
                                            @elseif($audit->event == 'restored')
                                                <td>Restaurado</td>
                                            @endif
                                            <td>{{ $audit->url }}</td>
                                            <td>{{ $audit->ip_address }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('auditorias.show', $audit->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> Ver
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $audits->links() !!}
            </div>
        </div>
    </div>
@endsection
