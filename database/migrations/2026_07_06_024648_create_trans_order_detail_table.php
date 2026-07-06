<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * untuk mengatur detail jasa transaksi
     */
    public function up(): void
    {
        Schema::create('trans_order_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order')->constrained('trans_order')->onDelete('cascade');
            $table->foreignId('id_service')->constrained('type_of_service')->onDelete('cascade');
            $table->integer('qty'); //berat / qty dalam kg
            $table->double('subtotal', 10, 2); //subtotal = harga jasa * qty
            $table->text('notes')->nullable(); //catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_order_detail');
    }
};
