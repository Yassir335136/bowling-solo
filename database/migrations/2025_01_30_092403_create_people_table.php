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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId("typePersoonId")->references('id')->on("type_persoons")->cascadeOnDelete();
            $table->string("firstName");
            $table->string("namePart")->nullable();
            $table->string("lastName");
            $table->string("callingName");
            $table->boolean("IsAdult");
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
        Schema::dropIfExists('people');
    }
};
