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
        $teste = '<h1>Olá!</h1>';  //cria uma variavel string 
        return View('teste', ['teste'=> $teste]); //metodo que retorna o valor e envia para view
    }

    
}
