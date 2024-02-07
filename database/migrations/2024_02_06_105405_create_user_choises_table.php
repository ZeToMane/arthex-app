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
        Schema::create('user_choises', function (Blueprint $table) {
            $table->id();
            $table->string('userUniqueIdphp')->unique();
            $table->string('firstChoise');
            $table->string('secondChoise');
            $table->string('thirdChoise');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_choises');
    }
};
