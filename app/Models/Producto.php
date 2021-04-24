<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";

    public function tienda(){
        return $this->hasOne(Tienda::class);
    }

    public function enlace(){
        return $this->hasOne(EnlaceCompra::class);
    }
}
