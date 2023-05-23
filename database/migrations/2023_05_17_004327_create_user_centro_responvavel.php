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
        Schema::create('user_centro_responvavel', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
                $table->foreign('user_id')->references('email')->on('users');
            $table->string('centro');
            $table->string('ano');
            $table->boolean('responsavel')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_centro_responvavel');
    }
};
