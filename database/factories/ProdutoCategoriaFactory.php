<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\ProdutoCategoria;
use Illuminate\Support\Str;

class ProdutoCategoriaFactory extends Factory
{
    protected $model=ProdutoCategoria::class;

    public function definition()
    {
        $prods=Produto::all();
        $cats=Categoria::all();
    
        return [
            $produto = Produto::factory()
            ->has(Categoria::factory()->count(500))
        ];
    }
}
