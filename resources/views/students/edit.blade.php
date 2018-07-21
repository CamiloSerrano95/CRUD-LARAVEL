@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar un estudiante
                </div>
                <div class="panel-body">
                    {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'PUT']) !!}

                        @include('students.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection