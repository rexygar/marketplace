<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $table = "tienda";

    public function categoria(){
        return $this->hasOne(Categoria::class);
    }

    public function producto(){
        return $this->hasMany(Producto::class,'id_tienda','id');
    }
}
