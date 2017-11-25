<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getIndex()
    {
        $produtos = ["nome" => "livro"];

    	//return view('produto.index', ["nome" => "livro"]);

        return view('produto.index', 
            compact('produtos'));
    }

    public function getLista()
    {
        return "lista de Produtos";
    }

    public function postLista()
    {
        return "POST: lista de Produtos";
    }
}
