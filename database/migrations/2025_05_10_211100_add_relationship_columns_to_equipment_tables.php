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
        // Adiciona colunas em weapons
        Schema::table('weapons', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });

        // Adiciona colunas em vests
        Schema::table('vests', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });

        // Adiciona colunas em badges
        Schema::table('badges', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });

        // Adiciona colunas em misc_equipments
        Schema::table('misc_equipments', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });

        // Adiciona colunas em radios
        Schema::table('radios', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });

        // Adiciona colunas em ammunitions
        Schema::table('ammunitions', function (Blueprint $table) {
            $table->foreignId('equipment_type_id')->nullable();
            $table->foreignId('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove colunas de weapons
        Schema::table('weapons', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove colunas de vests
        Schema::table('vests', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove colunas de badges
        Schema::table('badges', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove colunas de misc_equipments
        Schema::table('misc_equipments', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove colunas de radios
        Schema::table('radios', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });

        // Remove colunas de ammunitions
        Schema::table('ammunitions', function (Blueprint $table) {
            $table->dropColumn(['equipment_type_id', 'user_id']);
        });
    }
};
