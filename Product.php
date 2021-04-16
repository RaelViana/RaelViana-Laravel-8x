<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** Comando cria um model com migrate integrado
 * php artisan make:model Models\\Product -m 
 */

class Product extends Model
{
     //protected $table = 'products' ;

     protected $fillable = ['name','price', 'description', 'image'];
}
