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
        Schema::create('revenus', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->integer('prixRevenuProduit');
            $table->integer('quantiterRevenu');
            $table->integer('dateRevenu');
            $table->foreignId('financiere_id')
            ->constrained('financieres')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenus');
    }
};