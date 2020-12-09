<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'roles' => 'ADMIN'
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'roles' => 'USER'
        ]);
        DB::table('users')->insert([
            'name' => 'psikolog',
            'email' => 'psikolog@psikolog.com',
            'password' => bcrypt('password'),
            'roles' => 'PSIKOLOG',
            'penyelenggara' => 'Healthy Life',
            'bidang' => 'Psikolog Anak',
            'lama_kerja' => '4',
            'edukasi' => 'S3 Psikolog Universitas Padjadjaran',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus nunc, id sodales nunc venenatis non. Integer semper eget dolor sed malesuada. Ut finibus enim in ligula dictum cursus. Ut semper neque sed nunc consequat accumsan. Donec vehicula eros elit, ac suscipit tortor bibendum ut. Mauris tortor nisi, convallis a dui eget, molestie venenatis mauris. Pellentesque tincidunt, sapien eget vehicula aliquam, tellus lectus faucibus massa, ut auctor ante eros sed mi. Aenean ornare orci congue risus tristique, sed imperdiet risus consequat. Nam volutpat nisi vel purus fermentum sodales.',
        ]);
    }
}
