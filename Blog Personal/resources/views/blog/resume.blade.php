@extends('blog.template.layout')

@section('pestaña')
DIRECCIÓN
@endsection

@section('titulo')
<h1>Dirección</h1>
<hr>
<p><p>
@endsection

@section('contenido')
<p>Calle: {{$direc->calle}}<p>
<p>Mz: {{$direc->mz}}<p>
<p>Lt: {{$direc->lt}}<p>  
<p>Casa: {{$direc->casa}}<p>
<p>Colonia: {{$direc->colonia}}<p>
<p>Municipio: {{$direc->municipio}}<p>
<p>Estado: {{$direc->estado}}<p>
<p>CP: {{$direc->cp}}<p>
@endsection