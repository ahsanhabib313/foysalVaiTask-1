<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')
           ->insert([
                'username' => 'admin',
                'email' => 'superadmin@gamil.com',
                'role' => 'superadmin',
                'password' => Hash::make(123456)
           ]);
        
    }
}
