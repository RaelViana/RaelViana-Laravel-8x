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
       $teste1 = [1,2,3,4,5];
       $products = ['Tv', 'Geladeira', 'Forno', 'Sofá'];
      
        return View('admin.pages.products.index', compact('teste', 'teste1', 'products')); //metodo que retorna o valor e envia para view
    }

    
}
