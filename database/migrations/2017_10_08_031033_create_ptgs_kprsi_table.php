<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtgsKprsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptgs_kprsi', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama');
        $table->string('alamat');
        $table->integer('no_tlp');
        $table->string('tmp_lhr');
        $table->string('tgl_lhr');
        $table->string('ket');
        });
    }

    public function down()
    {
        Schema::drop('ptgs_kprsi');
    }
}
