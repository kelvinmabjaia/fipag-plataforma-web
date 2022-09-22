<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Departamento;

return new class extends Migration
{

    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->foreignIdFor(Departamento::class)->default(rand(1,5));
        });
    }

    public function down()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->dropForeign(['departamento_id']);
        });
    }
};
