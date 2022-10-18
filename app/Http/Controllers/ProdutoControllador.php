<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Cache;

class ProdutoControllador extends Controller
{
    public function index(){
        $expiracao=1; //minutos
        $produtos = Cache::remember('todososprodutos',$expiracao,function(){
            return Produto::all();
        });
        return view('produto',compact(['produtos']));
    }
}
