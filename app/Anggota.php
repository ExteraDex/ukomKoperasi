<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    public $timestamps=false;

    public function pinjaman(){
    	return $this->hasMany('App\pinjaman', 'id');
    }
}
