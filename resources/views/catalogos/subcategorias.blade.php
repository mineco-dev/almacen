@extends('layouts.web')

@section('content')
    <div class=text-center>
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Subcategorías</h1>
    </div>
    <x-catalogo-table :items="$subcategorias" :titles="['1'=>'codigo','2'=>'Subcategoría','3'=>'','4'=>'']" :columns="['1'=>'id','2'=>'nombre']" :acciones="['1'=>'Agregar','2'=>'Eliminar']"/>


@endsection