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
        // Adiciona constraints e índices para weapons
        Schema::table('weapons', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para vests
        Schema::table('vests', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para badges
        Schema::table('badges', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para misc_equipments
        Schema::table('misc_equipments', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para radios
        Schema::table('radios', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para ammunitions
        Schema::table('ammunitions', function (Blueprint $table) {
            $table->foreign('equipment_type_id')->references('id')->on('equipment_types')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->index(['equipment_type_id', 'user_id']);
        });

        // Adiciona constraints e índices para movements
        // Não adicionar equipment_type_id pois não existe na tabela movements

        // Adiciona constraints e índices para audits
        // Não adicionar novamente user_id pois já existe
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove chaves estrangeiras de weapons
        Schema::table('weapons', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de vests
        Schema::table('vests', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de badges
        Schema::table('badges', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de misc_equipments
        Schema::table('misc_equipments', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de radios
        Schema::table('radios', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de ammunitions
        Schema::table('ammunitions', function (Blueprint $table) {
            $table->dropForeign(['equipment_type_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove chaves estrangeiras de movements
        // Não remover equipment_type_id pois não existe na tabela movements

        // Remove chaves estrangeiras de audits
        // Não remover user_id pois já existe
    }
};
