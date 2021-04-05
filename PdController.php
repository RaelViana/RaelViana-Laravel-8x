<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;

    public function __construct(Request $request) 
      {
          dd($request);                   

          $this->request = $request;

          $this->middleware('auth')->only(['create, store']); //aplicando um filtro especifico  de autenticação 'middleware' nas rotas listadas no array
          $this->middleware('auth')->except(['index']); //aplica o filtro para todas as  rotas exceto a 'index'
      } 


    /**
     * Exibe uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Listagem de Produtos';
    }

    /**
     * Mostra o formulário de criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * 
     *  Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Detalhes do Produto {$id}";
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
