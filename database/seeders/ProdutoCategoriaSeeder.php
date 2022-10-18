<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\ProdutoCategoria;
use App\Models\Produto;
use Faker\Factory as Faker;

class ProdutoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        $prods=Produto::all();
        $cats=Categoria::all()->pluck('id')->toArray();

        foreach($prods as $p){
            $elementos=rand(2,6);

            for($i=0;$i<$elementos;$i++){
              
                    $cat_id=$faker->randomElement($cats);
              
                    ProdutoCategoria::where('produto_id',$p->id)
                    ->where('categoria_id',$cat_id)->existis();

                    ProdutoCategoria::create([
                        'produto_id'=>$p->id,
                        'categoria_id'=>$cat_id

                    ]);
                }
            }
        }


    }
}
