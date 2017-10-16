<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('alamat');
            $table->string('tgl_lhr');
            $table->string('tmp_lhr');
            $table->string('j_kel');
            $table->string('no_tlp');
            $table->string('image');
            $table->string('status');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // public function up()
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('name');
    //         $table->string('username')->unique();
    //         $table->string('email')->unique();
    //         $table->string('avatar')->default('avatar-user.png');
    //         $table->string('password')->nullable();
    //         $table->boolean('admin')->default(false);
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
