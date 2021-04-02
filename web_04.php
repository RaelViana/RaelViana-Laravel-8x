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

         /* Grupo de Rotas*/

         Route::middleware(['auth'])->group(function(){ //aplica autenticação no grupo de rotas

            Route::prefix('admin')->group(function(){ //adiciona o prefixo /admin nas rotas do grupo
        
                Route::namespace('Admin')->group(function(){ //espscefica o diretorio(namespace) Admin para os metodos TestController
        
                    Route::name('admim.')->group(function(){ //atribui 'admin.' ao name das rotas
        
                        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');        
                        
                        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                        
                        Route::get('/produtos', 'TesteController@teste')->name('products');
        
                        Route::get('/', 'TesteController@teste')->name('home');
        
                    });            
                        
                });
                
            });
            
        });