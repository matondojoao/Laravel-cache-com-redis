<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\ProdutoCategoria;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'preco'
    ];

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class,'ProdutoCategoria');
    }
}
