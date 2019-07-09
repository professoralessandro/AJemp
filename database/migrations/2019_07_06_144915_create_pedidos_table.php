<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table)
        {
            $table->bigIncrements('idPedido');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            $table->foreign('idProduto')->references('idProduto')->on('produtos');
            $table->string('tipoPagamento');
            $table->boolean('estaPago');
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
        Schema::dropIfExists('pedidos');
    }
}
