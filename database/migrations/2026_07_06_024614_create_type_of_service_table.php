<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * type jenis service (data jenis layanan laundry : cuci, cuci setrika, setrika, antar jemput)
     */
    public function up(): void
    {
        Schema::create('type_of_service', function (Blueprint $table) {
            $table->id();
            $table->string('service_name', 50); // -> nama jasa
            $table->integer('price'); // -> harga jasa
            $table->text('description')->nullable(); // -> deskripsi jasa
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_of_service');
    }
};
