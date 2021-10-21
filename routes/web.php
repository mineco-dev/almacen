<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalogos\CatalogoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ProviderController;
use App\Http\Livewire\Provider\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard','index')->name('dashboard');
//Route::view('/insumos','catalogos.insumos')->name('insumos');
Route::get('/proveedor',[index::class,'render'])->name('proveedores');
Route::get('/categorias',[CatalogoController::class,'categorias'])->name('categorias')->middleware('auth');
Route::get('/categoria/{id}/subcategorias',[CatalogoController::class,'subcategorias'])->name('subcategorias')->middleware('auth');

Route::resource('categoria',CategoryController::class)->middleware('auth');
Route::resource('subcategoria',SubcategoryController::class)->middleware('auth');
Route::resource('presentaciones',PresentationController::class)->middleware('auth');
Route::resource('insumos',InsumoController::class)->middleware('auth');
Route::resource('proveedores',ProviderController::class)->middleware('auth');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard1', function () {
    return view('dashboard');
})->name('dashboard1');
