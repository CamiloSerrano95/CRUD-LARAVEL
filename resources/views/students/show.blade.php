@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Ver un estudiante
                </div>
                <div class="panel-body">
                    <p><strong>Identificacion: </strong>{{ $student->identification }}</p>
                    <p><strong>Nombre: </strong>{{ $student->name }}</p>
                    <p><strong>Apellido: </strong>{{ $student->lastname }}</p>
                    <p><strong>Universidad: </strong>{{ $student->university }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection