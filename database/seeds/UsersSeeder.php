<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //untuk admin
        App\User::create([
        	'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'alamat' => 'kosong',
            'tgl_lhr' => 'kosong',
            'tmp_lhr' => 'kosong',
            'j_kel' => 'kosong',
            'no_tlp' => 'kosong',
            'status' => 'kosong',
            'role' => 'admin',
            'image' => 'default1.jpg',
        ]);

        //untuk member
        App\User::create([
        	'name' => 'member',
            'email' => 'member@member.com',
            'password' => bcrypt('member'),
            'alamat' => 'kosong',
            'tgl_lhr' => 'kosong',
            'tmp_lhr' => 'kosong',
            'j_kel' => 'kosong',
            'no_tlp' => 'kosong',
            'status' => 'kosong',
            'role' => 'member',
            'image' => 'default1.jpg',
        ]);
    }
}
