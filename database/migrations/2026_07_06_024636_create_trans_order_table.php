<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * membuat header transaksi order
     */
    public function up(): void
    {
        Schema::create('trans_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer')->constrained('customer')->onDelete('cascade');
            $table->string('order_code', 30); //generate kode unik setiap transaksi order
            $table->date('order_date');
            $table->date('order_end_date')->nullable(); //Tanggal estimated selesai laundry
            $table->tinyInteger('order_status')->default(0); //0=baru, 1=selesai
            $table->integer('order_pay')->default(0); //jumlah uang yang dibayarkan customer
            $table->integer('order_change')->default(0); //kembalian
            $table->integer('total')->default(0); //total harga
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_order');
    }
};
