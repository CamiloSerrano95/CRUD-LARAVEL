<div class="form-group">
    {{ Form::label('identification', 'Identificacion del estudiante') }}
    {{ Form::text('identification', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Nombre del estudiante ') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('lastname', 'Apellido del estudiante') }}
    {{ Form::text('lastname', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('university', 'Universidad donde estudias') }}
    {{ Form::text('university', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>