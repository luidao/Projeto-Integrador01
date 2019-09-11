<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco');
            $table->unsignedBigInteger('fk_categoria');
            $table->string('imagem');
            $table->unsignedBigInteger('fk_marca');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('fk_categoria')->references('id')->on('categoria');
            $table->foreign('fk_marca')->references('id')->on('marca');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
