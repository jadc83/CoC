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
        Schema::table('personajes', function (Blueprint $table) {
            $table->integer('FUE')->after('nombre')->nullable();
            $table->integer('CON')->nullable();
            $table->integer('DES')->nullable();
            $table->integer('TAM')->nullable();
            $table->integer('APA')->nullable();
            $table->integer('INT')->nullable();
            $table->integer('POD')->nullable();
            $table->integer('EDU')->nullable();
            $table->integer('HP')->nullable();
            $table->integer('MP')->nullable();
            $table->integer('COR')->nullable();
            $table->integer('MAX_COR')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            //
        });
    }
};
