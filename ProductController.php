<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;
    private $repository;

    public function __construct(Request $request, Product $product) //injeção de dependencia Request no metodo Construtor
      {
          //dd($request);                           //help dumper 

          $this->request = $request;
          $this->repository = $product;

          //$this->middleware('auth'); //aplicando um filtro de autenticação 'middleware'
      } 

    //Criação do CRUD Utilizando linha de Comando  (php artisan make:controller ProductController --resource) //

    /**
     * Exibe uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $products = Product::latest()->paginate();  // retorna Todos os registros Cadastrados
      
        return View('admin.pages.products.index', [
            'products'=> $products,
        ]); 
    }

    /**
     * Mostra o formulário de criação de um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        $data = $request->only('name', 'description', 'price');
        
        $this->repository->create($data);

        return redirect()->route('products.index'); //redireciona para rota que faz a listagem
        

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
        
        if(!$product = $this->repository->find($id))
         return redirect()->back();

    

        return view('admin.pages.products.show', [
            'product'=> $product
        ]);
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(!$product = $this->repository->find($id))
         return redirect()->back();

        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  App\Http\Requests\StoreUpdateProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProductRequest $request, $id)
    {
        if(!$product = $this->repository->find($id))
        return redirect()->back();

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$product = $this->repository->find($id))
         return redirect()->back();
       
         $product->delete();

         return redirect()->route('products.index');
    }
}
