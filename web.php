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


Route::get('/', function () { //retorna a view welcome
    return view('welcome');
});

Route::get('/contato', function () {   //retorna a view contact
    return view('contact');
});

Route::get('/empresa', function () {    //retorna a view company dentro do diretório 'site'
    return view('site.company');
});

Route::post('/register', function(){   //retorna um post 
    return '';
});

Route::any('/any',function(){  //esta rota permite todos os tipos de verbos de métodos php [GET,POST,PUT, etc]
    return 'Any';
});

Route::match(['get','post'], '/match', function(){  //essa rota possibilita definir mais de um metodo dentro de [ ...] 
    return 'match';
});


?>