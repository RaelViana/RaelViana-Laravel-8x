<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    /* Cria metodo para exibir id de produltos */
    
    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }
}
