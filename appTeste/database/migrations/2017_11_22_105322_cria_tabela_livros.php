<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaLivros extends Migration
{
    /**
     * Run the migrations.
     * é o comando de criação
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function(Blueprint $table){
                    //Auto incremento
            $table->increments('id');
                    //tipo do atributo e atributo
            $table->string('titulo');
            $table->string('descricao');
                    //Adiciona data ás modificações
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     é o comando de rowback
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livros');
    }
}
