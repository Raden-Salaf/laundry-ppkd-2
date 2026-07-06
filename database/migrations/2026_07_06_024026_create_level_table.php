<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Fungsi untuk membuat table level (data Role : admin,operator, pimpinan)
     */
    public function up(): void
    {
        Schema::create('level', function (Blueprint $table) {
            $table->id(); // -> primary key AI
            $table->string('level_name', 50); // -> varchar(50) -> nama level (admin, operator, pimpinan)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level');
    }
};
