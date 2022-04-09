<div class="form-group">
    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data" id="formulario">
        <label class="h5">Nombre</label>
        <input class="form-control" name="name" type="text" pattern="[A-Za-z ]{4,25}"
            title="El nombre de usuario solo debe contener letras" value="{{ old('name') }}" required>
        <label class="h5">Apellido Paterno</label>
        <input class="form-control" name="apellido_paterno" id="apellido_paterno"
            value="{{ old('apellido_paterno') }}" required>
        <label class="h5">Apellido Materna</label>
        <input class="form-control" name="apellido_materno" id="apellido_materno"
            value="{{ old('apellido_materno') }}" required>
        <label class="h5">Email</label>
        <input class="form-control" name="email" type="text" value="{{ old('email') }}" required>
        <label class="h5">Contraseña</label>
        <input class="form-control password" name="password" type="password" required>
        <label class="h5">Confirmar Contraseña</label>
        <input class="form-control password" name="confirmed" type="password" required>
        <h2 class="h5">Lista de roles</h2>
        @foreach ($roles as $rol)
            <label>{!! Form::radio('roles[]', $rol->id, null, ['class' => 'mr-1 rol', 'required' => 'required']) !!} {{ $rol->name }}</label>
        @endforeach
        <br>
        <button type="button" class="btn btn-primary btn-sm mt-2" role="dialog" data-bs-toggle="modal"
            data-bs-target="#confirm-agregar">
            Guardar
        </button>
        @csrf
    </form>
</div>
