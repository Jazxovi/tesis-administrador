@extends('admin.index')
@section('content')
<div class="espacio"></div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('alumno.pdf', $id)}}" class="btn btn-info">PDF</a>
        @include('alumnos.info')
    </div>
    <div class="espacio"></div>
</div>
@stop