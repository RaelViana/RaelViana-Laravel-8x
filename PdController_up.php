<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

      
/**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->file('photo')->isValid()){  //faz a requisição de um arquivo, e verifica se é valido ou não
            dd($request->file('photo')->store('products'));
        } 

    }


    
}
