<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('cliente_id', $cliente, $proyecto->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
