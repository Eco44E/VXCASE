<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Vendas;
use App\VendaProduto;

class ProdutosController extends Controller
{
    public function listarProdutos()
    {
        $produtos = Produtos::all(); 
        $vendas = Vendas::all();


    // Interação para retornar o prazo das vendas com base no maior prazo dos produtos.
    foreach ($vendas as $venda) {    

        $produtosVenda = VendaProduto::where('id_venda', $venda->id)->get();
        $venda->maiorPrazo = 0;

        foreach($produtosVenda as $produtoVenda){

            $listaProdutos = Produtos::where('id', $produtoVenda->id_produto)->get();
            foreach($listaProdutos as $produto){
                if($produto->entrega > $venda->maiorPrazo){
                    $venda->maiorPrazo = $produto->entrega;
                }                
            }            
        }
    } 
        return view('vendas.home',compact('produtos', 'vendas'));
        
    }    
  
}
