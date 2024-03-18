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
        Schema::create('publiciters', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->text('contenu');
            $table->date('datePublicite');
            $table->string('picture');
            $table->foreignId('publicitaire_id')
            ->constrained('publicitaires')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publiciters');
    }
};