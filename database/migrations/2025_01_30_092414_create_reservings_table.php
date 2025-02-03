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
        Schema::create('reservings', function (Blueprint $table) {
            $table->id();

            $table->foreignId("personId")->references("Id")->on("people")->cascadeOnDelete();
            $table->foreignId("openingTimeID");
            $table->foreignId("tariefId");
            $table->foreignId("alleyId")->references("Id")->on("alleys")->cascadeOnDelete();
            $table->foreignId("packOptionsId");
            $table->foreignId("reservationStatusId");

            $table->unsignedBigInteger("reservingsNumber");
            $table->date("date");
            $table->unsignedTinyInteger("totalHours");
            $table->time("startTime");
            $table->time("endTime");
            $table->unsignedTinyInteger("totalAdults");
            $table->unsignedTinyInteger("totalChildren");

            // system fields
            $table->boolean('IsActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservings');
    }
};
