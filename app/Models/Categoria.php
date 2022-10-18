<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\ProdutoCategoria;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
    ];

    public function produto()
    {
        return $this->belongsToMany(Produto::class,'ProdutoCategoria');
    }
}
