<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public $table = 'produtos';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome',
        'preco',
        'entrega'
    ];
    public function vendas()
    {
        return $this->belongsToMany('App\Vendas', 'venda_produtos');
    }
}
