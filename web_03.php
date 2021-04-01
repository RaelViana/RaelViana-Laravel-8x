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

Route::get('/nome-url', function(){
    return 'Hey Hello';
})->name('url.name'); //especifica um nome para url

Route::get('redirect3', function(){
    return Redirect()->route('url.name'); //redireciona  redirect3 para nome-url
});

?>