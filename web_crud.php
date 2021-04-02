<?php

use Illuminate\Support\Facades\Redirect;
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

         /* CRUD - Rotas */

Route::get('products', 'ProductController@index')->name('products.index'); //retorna busca produtos l

Route::get(' products/{id}', 'ProductController@show')->name('products.show'); //faz a busca de um registro pelo Id

Route::get('products/create', 'ProductController@create')->name('products.create'); //recebe os dados de criação de um novo registro

Route::get(' products/{id}/edit', 'ProductController@edit')->name('products.edit'); //recebe os dados de edição de registro

Route::post('products', 'ProductController@store')->name('products.store'); //posta a lista de registros

Route::put('products/{id}', 'ProductController@update')->name('products.update');  // Faz a edição de um registro especifico

Route::delete('products/{id}', 'ProductController@delete')->name('products.delete');  //Exclui um registro

 ?>