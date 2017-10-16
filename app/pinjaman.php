<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    // Protek DataBase Table //
    protected $table = 'pinjaman';
    // ini di false kan jika sobat tidak menggunakan created_at dan updated_at otomatis. //
	public $timestamps = false;

	public function anggota(){
    	return $this->belongsTo('App\Anggota', 'anggota_id', 'id');
    }
    public function angsuran(){
    	return $this->belongsTo('App\Angsuran', 'angsuran_id', 'id');
    }
}
