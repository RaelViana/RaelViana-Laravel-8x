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
Route::get('redirect1', function(){ // rota , redirecionamento
    return Redirect ('/redirect2'); //recebe valor Redirect 02
});

Route::get('redirect2', function(){
    return 'Redirect 02';
});

//---------------------------------------
Route::redirect('redirect1','redirect2'); //redireciona diretamente

Route::view('/view', 'welcome'); ///retorna diretamente uma view
?>