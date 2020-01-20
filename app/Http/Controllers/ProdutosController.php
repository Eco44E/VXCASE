<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Vendas;

class ProdutosController extends Controller
{
    public function listarProdutos()
    {
        $produtos = Produtos::all(); 
        $vendas = Vendas::all();

        return view('vendas.home',compact('produtos', 'vendas'));
        
    }    
  
}
