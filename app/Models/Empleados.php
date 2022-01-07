<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
   protected $fillable = [
    'id',
    'nombre',
    'email',
    'sexo',
    'boletin',
    'descripcion',
    'area_id'

   ];

   public function Areas(){
       return $this->belongsToMany(Areas::class, 'id');
   }


}
