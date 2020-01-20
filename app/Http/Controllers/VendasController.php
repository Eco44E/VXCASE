<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Vendas;
use App\Produtos;
use App\VendaProduto;

class VendasController extends Controller
{
    // public function registrarVenda(Request $request)
    // {
    //   $venda = new Vendas();
    //   $venda = $venda->create($request->all());
    //   echo $venda;
    //   return $venda;
     
    // }

    public function salvarVenda(Request $request){

      // dd($request->all()); Para fins de teste;

      $venda = new Vendas();
      $venda->data_compra = Carbon::now();
      $venda->save();

      foreach($request->produtos as $produto){
        $venda_produto = new VendaProduto();

        $venda_produto->id_produto = $produto;
        $venda_produto->id_venda = $venda->id;

        $venda_produto->save();
      }

      return redirect()->route('produtos.index');
    }
}
