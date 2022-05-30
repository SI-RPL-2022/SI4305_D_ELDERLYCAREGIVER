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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesanan');
            $table->string('nama_user');
            $table->string('nama_pengasuh');
            $table->text('catatan_user');
            $table->string('jenis_jasa');
            $table->integer('harga');
            $table->integer('jumlah_hari');
            $table->bigInteger('total_bayar');
            $table->string('status_pesanan');
            $table->date('tgl_kadaluwarsa');
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
        Schema::dropIfExists('pesanan');
    }
};
