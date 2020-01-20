<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaProduto extends Model

{
    public $table = 'venda_produtos';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_venda',
        'id_produto',
    ];
}
