<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('name');
            $table->string('edad');
            $table->string('color');
            $table->string('raza');
            $table->enum('estado',['estirilizado','no_esterilizado'])->default('no_esterilizado');
            $table->string('caracteristicas');
            $table->string('emfermedades');
            $table->enum('genero',['macho','hembra'])->default('macho');
            $table->longText('foto');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
