<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
   protected $table = 'angsuran';
   public $timestamps=false;

   public function pinjaman(){
   		return $this->hasMany('App\pinjaman', 'id');
   }
}
