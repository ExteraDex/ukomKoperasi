<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtlAngsuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtl_angsuran', function (Blueprint $table) {
        $table->increments('id');
        $table->string('tgl_jatuh_tempo');
        $table->integer('bsr_angsuran');
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
        Schema::drop('dtl_angsuran');
    }
}
