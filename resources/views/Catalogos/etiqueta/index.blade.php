@extends('layouts.plantilla')


@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                {{ Breadcrumbs::render('etiqueta.index') }}
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Etiqueta') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('etiquetas.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Agregar
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etiquetas as $etiqueta)
                                    <tr>
                                        <td>{{ $etiqueta->id }}</td>


                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Opciones
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <form action="{{ route('etiquetas.destroy', $etiqueta->id) }}"
                                                        method="POST">
                                                        <a class="dropdown-item"
                                                            href="{{ route('etiquetas.show', $etiqueta->id) }}">
                                                            <i class="fa fa-fw fa-eye"></i> Ver
                                                        </a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('etiquetas.edit', $etiqueta->id) }}">
                                                            <i class="fa fa-fw fa-edit"></i> Editar
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="fa fa-fw fa-trash"></i> Eliminar
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $etiquetas->links() !!}
            </div>
        </div>
    </div>
@endsection
