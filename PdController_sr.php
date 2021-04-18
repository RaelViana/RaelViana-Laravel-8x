<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     /**
     * Busca um recurso especifico no armazenamento.
     
     */
    public function search(Request $request)
    {
        $filters =$request->except('_token');

        $products = $this->repository->search($request->filter);
        
        return View('admin.pages.products.index', [
            'products'=> $products,
            'filters' => $filters,
        ]); 
    }

    
}
