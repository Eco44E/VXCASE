<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Produto[] $produtos
 */
class Vendas extends Model
{
  public $timestamps = false;

    public $table = 'vendas';
    protected $fillable = [
      'id',
      'data_compra'
    ];

    public function produtos()
    {
        return $this->belongsToMany('App\Produtos', \App\VendaProduto::class, 'id_venda', 'id_produto');
    }
}
