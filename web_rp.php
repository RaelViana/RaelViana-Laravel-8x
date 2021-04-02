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

         /* Rota Com parâmetro */


         Route::get(' products/{id}', 'ProductController@show')->name('products.show'); //rota recebe parâmetro {id} do metodo de Listagem de produtos



         ?>