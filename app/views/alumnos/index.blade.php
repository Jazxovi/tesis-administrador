@extends('admin.index')
@section('content')
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Información</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumno as $d)
        <tr>
            <td>{{$d->nombres}}</td>
            <td><a href="{{ URL::action('AlumnosController@show', $d->id)}}">Información</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
