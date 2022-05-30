<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('pengasuh_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tanggal');
            $table->string('no_telp_kerabat');
            $table->string('penyakit')->nullable();
            $table->string('catatan')->nullable();
            $table->string('harga')->nullable();
            $table->enum('status', ['request', 'berlangsung', 'konfirmasi', 'selesai']);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};