<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('proveedor')->nullable();
            $table->string('tipo_tarjeta')->nullable();
            $table->date('fecha_corte')->nullable();
            $table->date('fecha_pago')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['proveedor', 'tipo_tarjeta', 'fecha_corte', 'fecha_pago']);
        });
    }
};
