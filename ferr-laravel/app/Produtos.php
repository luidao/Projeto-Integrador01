<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = "produto"; //nome da tabela
    protected $primaryKey = "id_produto"; // chave primaria

    public function categoria(){ //traz categoria
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

    public function marca(){ //traz e
        return $this->belongsTo(Marca::class, 'fk_editora');
    }
}