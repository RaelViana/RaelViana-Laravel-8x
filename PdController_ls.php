<?php

namespace App\Http\Controllers;
use App\Models\Product;
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
       
       $products = Product::all();  // retorna Todos os registros Cadastrados
      
        return View('admin.pages.products.index', [
            'products'=> $products,
        ]); 
    }


    
}
