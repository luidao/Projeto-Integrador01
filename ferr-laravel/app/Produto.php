<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    protected $primaryKey = "id";

    public function categoria(){ //traz categoria
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }
}
