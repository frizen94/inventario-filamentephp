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
        Schema::create('vests', function (Blueprint $table) {
            $table->id();
            $table->string('numero_serie')->unique();
            $table->string('tamanho');
            $table->date('validade')->nullable();
            $table->string('situacao');
            $table->string('localizacao');
            $table->text('observacoes')->nullable();
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
        Schema::dropIfExists('vests');
    }
};
