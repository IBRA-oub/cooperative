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
        Schema::create('heure_trevaillers', function (Blueprint $table) {
            $table->id();
            $table->integer('heurs');
            $table->timestamps();

            $table->foreignId('financiere_id')
            ->constrained('financieres')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('planner_id')
            ->constrained('planners')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('stockiste_id')
            ->constrained('stockistes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('publicitaire_id')
            ->constrained('publicitaires')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreignId('travailleur_id')
            ->constrained('travailleurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heure_trevaillers');
    }
};