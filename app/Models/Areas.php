<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Areas extends Model
{
   protected $fillable = [
       'id',
       'nombre'
   ];


   public function Empleados(){
    return $this->belongsToMany(Empleados::class, 'id');
}


}
