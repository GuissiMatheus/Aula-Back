<?php

namespace App\Http\Controllers;

/**
 * Como usar o Tinker:
 * 
 * php artisan tinker
 * 
 * App\Models\Categoria::all()
 * 
 * App\Models\Categoria::create(['descricao' => 'Teste Tinker'])
 */
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request) {
        return Categoria::all();
    }

    public function store(Request $request) {
        $categoria = Categoria::create([
            'descricao' => $request->descricao,
        ]);
    }

    public function show(Request $request, Categoria $categoria) {
        return $categoria;
    }

    public function delete(Categoria $categoria) {
        $categoria->delete();
    }
}
