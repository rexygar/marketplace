<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnlaceCompra extends Model
{
    use HasFactory;

    protected $table = "enlace_compra";

    public function producto(){
        return $this->hasOne(Producto::class);
    }
}
