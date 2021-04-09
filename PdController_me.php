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
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o Produto {$id}");
    }

    
}
