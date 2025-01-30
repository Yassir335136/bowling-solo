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
        Schema::create('reservering', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PersoonId')->constrained('users')->cascadeOnDelete();
            $table->integer('OpeningstijdId', false, true);
            $table->integer('TariefId', false, true);
            $table->integer('BaanId', false, true);
            $table->integer('PakketOptieId', false, true);
            $table->integer('ReserveringStatusId', false, true);
            $table->string('ReserveringsNummer', 20);
            $table->date('Datum');
            $table->tinyInteger('AantalUren', false, true);
            $table->time('BeginTijd');
            $table->time('EindTijd');
            $table->tinyInteger('AantalVolwassen', false, true);
            $table->tinyInteger('AantalKinderen', false, true)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserverings');
    }
};
