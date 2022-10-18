<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    protected $model=Produto::class;
    public function definition()
    {
        return [
            'nome'=>$this->faker->word,
            'preco'=>$this->faker->randomFloat(2,1,1000)
        ];
    }
}
