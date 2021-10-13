<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CatalogoController extends Controller
{
    public function categorias()
    {
        return view('catalogos.categorias',[
            'categorias' => Category::latest()->paginate(15)
        ]);
    }
}
