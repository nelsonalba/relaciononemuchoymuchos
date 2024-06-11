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
        Schema::create('cliente_producto', function (Blueprint $table) {
            $table->id();

            //creacion de tablas foraneas
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();

            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')->onDelete('cascade');// dentro de on va la tabla de la migracion

            $table->foreign('producto_id')
            ->references('id')
            ->on('productos')->onDelete('cascade');// dentro de on va la tabla de la migracion

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_producto');
    }
};
