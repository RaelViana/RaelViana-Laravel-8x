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
       
      
        return View('admin.pages.products.index'); 
    }

    /**
     * Mostra o formulário de criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create'); // método de inserção create
    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
}
