@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listas de Estudiantes
                    <a href="{{ route('students.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'students.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('identification', null, ['class' => 'form-control', 'placeholder' => 'Identificacion']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('university', null, ['class' => 'form-control', 'placeholder' => 'Universidad']) }}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                    {{ Form::close() }}
                    <hr>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="18px">ID</th>
                                <th>Identificacion</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Universidad</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->identification }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->university }}</td>
                                    <td width="10px">
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-default">Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-default">Editar</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $students->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection