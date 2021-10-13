<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CatalogoController extends Controller
{
    public function categorias()
    {
        $categorias = Category::latest()->paginate(15);

        dd();
        return view('catalogos.categorias',[
            'categorias' => Category::latest()->paginate(15)
        ]);
    }

    public function subcategorias($id)
    {
        return view('catalogos.subcategorias',[
            'subcategorias' => Category::findOrFail($id)->subcategorias()->simplePaginate(5)
        ]);
    }
}
