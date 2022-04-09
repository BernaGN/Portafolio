<form action="{{ route('roles.store') }}" method="POST" id="formulario">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del rol" required>
    </div>
    <h2 class="h3">Lista de Permisos</h2>
    <table>
        <thead>
            <tr>
                <th>
                    <center>Modulo</center>
                </th>
                <th>
                    <center>Index</center>
                </th>
                <th>
                    <center>Store</center>
                </th>
                <th>
                    <center>Update</center>
                </th>
                <th>
                    <center>Delete</center>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permisos as $permiso)
                @php
                    [$modulo, $d] = explode('.', $permiso->name);
                @endphp
                <tr>
                    <td>
                        <center>{{ $modulo }}</center>
                    </td>
                    <!--<li>
                        {!! Form::checkbox('permissions[]', $permiso->id, null, ['class' => 'mr-1 rol']) !!} {{ $permiso->description }}
                    </li>-->

                    <td data-topic="index">
                        <center>
                            <input type="checkbox" name="permissions[]" value="{{ $permiso->id }}"
                                {{ $d == 'index' ? 'checked' : '' }} class="mr-1 rol">
                        </center>
                    </td>
                    <td data-topic="store">
                        <center>
                            <input type="checkbox" name="permissions[]" value="{{ $permiso->id }}"
                                {{ $d == 'store' ? 'checked' : '' }} class="mr-1 rol">
                        </center>
                    </td>
                    <td data-topic="update">
                        <center>
                            <input type="checkbox" name="permissions[]" value="{{ $permiso->id }}"
                                {{ $d == 'update' ? 'checked' : '' }} class="mr-1 rol">
                        </center>
                    </td>
                    <td data-topic="delete">
                        <center>
                            <input type="checkbox" name="permissions[]" value="{{ $permiso->id }}"
                                {{ $d == 'destroy' ? 'checked' : '' }} class="mr-1 rol">
                        </center>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary btn-sm mt-2" role="dialog" data-bs-toggle="modal"
        data-bs-target="#confirm-agregar">
        Guardar
    </button>
    @csrf
</form>
