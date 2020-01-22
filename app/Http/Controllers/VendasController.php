<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Vendas;
use App\Produtos;
use App\VendaProduto;

class VendasController extends Controller
{
    public function salvarVenda(Request $request){

      //dd($request->all()); Para fins de teste;

      $venda = new Vendas();
      $venda->data_compra = Carbon::now();
      $venda->save();
      $maiorPrazo = 0;

      foreach($request->produtos as $produto){
        $venda_produto = new VendaProduto();
        $venda_produto->id_produto = $produto;
        $venda_produto->id_venda = $venda->id;
        $venda_produto->save();
      }

      return redirect()->route('produtos.index', compact('venda'));
    }
}
