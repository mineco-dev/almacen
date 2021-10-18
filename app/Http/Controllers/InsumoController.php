<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insumo;
use App\Models\presentation;
use Illuminate\Http\Request;
use App\Http\Requests\InsumoRequest;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = Insumo::latest()->paginate(15);
        $categorias = Category::get();
        $presentaciones = Presentation::get();

        return view('catalogos.insumos', [
            'insumos' => $insumos,
            'categorias' => $categorias,
            'presentaciones' => $presentaciones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsumoRequest $request)
    {
        $insumos = Insumo::create($request->all());

        return back()->with('status', 'Almacenado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Insumo::where('id', $id)->delete();
            return back()->with('status', 'Eliminado con éxito');
        } catch (\Exception $e) {

            return back()->with('status', 'No se puede eliminar ya que este registro está siendo utilizado por otra tabla.');
        }
    }
}
