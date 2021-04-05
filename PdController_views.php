<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

      

    /**
     * Exibe uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;  //cria uma variavel com valor inteiro
        return View('teste', ['teste'=> $teste]); //metodo que retorna o valor e envia para view
    }

    
}
