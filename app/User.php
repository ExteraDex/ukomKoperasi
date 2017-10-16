<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
 
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'name', 'email', 'password', 'role','alamat', 'tgl_lhr','tmp_lhr', 'j_kel', 'no_tlp', 'status', 'image',
     ];
 
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
         'password', 'remember_token',
     ];
}
