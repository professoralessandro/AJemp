<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table)
        {
            $table->Increments('idProduto');
            $table->string('nomeProduto');
            $table->decimal('preco', 10, 2);
            $table->integer('codigoBarras');
            $table->text('descricao');
            $table->enum('category', ['eletronicos', 'moveis', 'limpeza', 'banho']);
            $table->string('imagem');
            $table->boolean('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
