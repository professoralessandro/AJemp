<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maillings', function (Blueprint $table)
        {
            $table->bigIncrements('idMailling');
            $table->string('emailDestinatario');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            $table->string('assunto');
            $table->text('mensagem');
            $table->string('status');
            $table->string('assunto');
            $table->boolean('ativo');
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
        Schema::dropIfExists('maillings');
    }
}
