@extends('blog.template.layout')

@section('pestaña')
DATOS
@endsection

@section('titulo')
<h1>Datos</h1>
<hr>
<p> <p>
@endsection

@section('contenido')
<p>Nombre(s): {{$info->nombre}}</p>
<p>Apellidos: {{$info->apellido}}<p>
<p>Edad: {{$info->edad}}<p>
<p>Matricula: {{$info->matricula}}<p>
<p>Correo Institucional: {{$info->correo}}<p>
<p>Tel: {{$info->cel}}<p>
<p>Escuela: {{$info->uni}}<p>
<p>Carrera: {{$info->carrera}}<p>
<p>Grado: {{$info->cuatri}}<p>
<p>Tipo de Sangre: {{$info->sangre}}<p>
@endsection