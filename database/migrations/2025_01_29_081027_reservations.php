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
        Schema::create('reservations',  function (Blueprint $table) {
            $table->id();
            $table->foreignId('rowId')->references("id")->on("rows")->cascadeOnDelete();
            $table->foreignId('userId')->references("id")->on("users")->cascadeOnDelete();
            $table->dateTime('startDateTime', 6)->default(now());
            $table->dateTime('endDateTime', 6)->default(now());
            $table->enum('reservationStatus', ['pending', 'accepted', 'denied', 'due'])->default('pending');
            $table->unsignedTinyInteger('adultCount');
            $table->unsignedTinyInteger('childrenCount')->nullable();
            $table->enum('bundleOption', ['basis', 'luxe', 'Kinderpartij', 'Vrijgezellenfeest'])->default('basis');
            $table->string('comment', 255)->nullable();
            $table->boolean('isActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('reservations');
    }
};
