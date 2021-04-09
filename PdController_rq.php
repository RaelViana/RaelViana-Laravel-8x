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
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //método com função request(requisição)
    {
        dd($request->all()); //recebe todos os dados do formulário
        dd($request->only(['name'])); //recebe apenas os dados do especificos do  formulário
        dd($request->name); //recebe apenas os dados do especificos do name no formulário
        dd($request->input('teste', 'default')); //retorna o name caso exista, se não retorna um padrão
        dd($request->except('description')); //retorna todos os campos, exeto o que está especificado  
    }

    
}
