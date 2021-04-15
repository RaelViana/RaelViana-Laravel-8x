<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

      
  /**
     * 
     *  Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ;
        if(!$product = Product::find($id))
         return redirect()->back();

    

        return view('admin.pages.products.show', [
            'product'=> $product
        ]);
    }


    
}
