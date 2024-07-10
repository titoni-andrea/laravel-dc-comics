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
        Schema::create('fumetti', function (Blueprint $table) {
            $table->id();

            $table->string("titolo", 80);
            $table->string("descrizione", 200);
            $table->string("autore", 20);
            $table->decimal("price", 5);
            $table->year("uscita");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fumetti');
    }
};
