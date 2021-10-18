@extends('layouts.web')

@section('content')
    <div class=text-center>
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Catálogo Proveedores</h1>
    </div>

    <x-insumos-table :items="$insumos" :titles="['Código Sicoin','Nombre','Descripción','Categoría','Subcategoría','Cantidad','']" :acciones="['Eliminar']" parametroRuta="id" ruta="insumos.destroy" />


@endsection