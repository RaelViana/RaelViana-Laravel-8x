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

     public function search($filter = null)
     {
          $results = $this->where(function ($query) use($filter){
               if ($filter){
                    $query->where('name', 'LIKE', "%{$filter}%");
               }
          })//->toSql();
           ->paginate();

          return $results;
     }
}
