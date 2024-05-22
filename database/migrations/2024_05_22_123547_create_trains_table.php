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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100);
            $table->string('Stazione di partenza', 150);
            $table->string('Stazione di arrivo', 150);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice Treno', 20);
            $table->tinyInteger('Numero Carrozze');
            $table->boolean('In Orario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
