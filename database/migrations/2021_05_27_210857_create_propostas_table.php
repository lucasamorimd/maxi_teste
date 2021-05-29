<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cliente');
            $table->string('servico');
            $table->string('endereco_obra');
            $table->float('valor_total', 8, 2);
            $table->float('valor_parcela', 8, 2);
            $table->float('sinal', 8, 2);
            $table->integer('quantidade_parcelas');
            $table->date('data_inicio_pagamento');
            $table->text('data_parcelas');
            $table->string('arquivo_anexo');
            $table->string('status');
            $table->dateTime('proposta_updated_at')->useCurrentOnUpdate();
            $table->dateTime('proposta_created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propostas');
    }
}
