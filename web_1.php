<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/categorias/{flag}', function($flag){ //rota com sub-categorias, {$flag}retorna a busca inserida na Url
    return "Produtos da Categoria: {$flag}";
});

Route::get('/categoria/{flag}/posts', function($flag){ //rota com sub-categorias, {$flag}recebe o valor dinâmico da busca inserida na Url
    return "Posts da Categoria: {$flag}";
});

Route::get('/produtos/{idProduct?}', function($idProduct = ''){ //rota com listagem de itens example 'produtos/1'
    return "Produto(s) {$idProduct}";
});

?>