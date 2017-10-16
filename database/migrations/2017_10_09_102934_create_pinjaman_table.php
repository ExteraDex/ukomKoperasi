<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pinjaman');
            $table->integer('anggota_id');
            $table->integer('besar_pinjaman');
            $table->string('tgl_pengajuan_pinjaman');
            $table->string('tgl_acc_pinjaman');
            $table->string('tgl_pinjaman');
            $table->string('tgl_pelunasan');
            $table->integer('angsuran_id');
            $table->string('ket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjaman');
    }
}
