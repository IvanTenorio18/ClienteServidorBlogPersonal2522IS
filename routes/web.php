<?php

use Illuminate\Support\Facades\Route;
use App\Models\informacion;
use App\Models\direccion;


Route::get('/', function () {
    $info = new Informacion();
    $info->nombre ="Luis Iván";
    $info->apellido="Tenorio Garcia";
    $info->edad="20 años";
    $info->matricula ='1320114181';
    $info->correo="luis_1320114181@uptecamac.edu.mx";
    $info->cel ='5610910645';
    return view('blog.index',['info'=> $info]);
})->name('inicio');

Route::get('/portfolio', function () {
    return view('blog.portfolio');
})->name('portfolio');

Route::get('/resume', function () {
    $direc = new direccion();
    $direc->calle ="Monte Tabor";
    $direc->casa ='124';
    $direc->colonia="Geovillas de Terranova";
    $direc->municipio="Acolman";
    $direc->estado="México";
    return view('blog.resume',['direc'=>$direc]);
})->name('resume');

