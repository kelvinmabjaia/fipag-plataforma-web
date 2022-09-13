<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->string('referencia')->unique();
            $table->string('nr')->unique();
            $table->string('finalidade');
            $table->enum('tipo_pedido', ['normal', 'urgente'])->default('normal');
            $table->float('orcamento', $scale = 2);
            $table->date('data_submissao');
            $table->date('data_prazo');
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
        Schema::dropIfExists('processos');
    }
};
