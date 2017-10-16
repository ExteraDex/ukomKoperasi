<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nm_simpanan');
        $table->integer('anggota_id');
        $table->string('tgl_simpanan');
        $table->string('besar_simpanan');
        $table->string('ket');
        });
    }

    public function down()
    {
        Schema::drop('simpanan');
    }
}
