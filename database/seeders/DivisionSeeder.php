<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('divisions')->delete();
        Schema::enableForeignKeyConstraints();

        DB::table('divisions')
            ->insert([
                [    
                    'id' => 1,
                    'name' => 'Barisal',
                    'code' => 10
                
                ],
                [
                    'id' => 2,
                    'name' => 'Chittagong',
                    'code' => 20
                
                ],
                [
                    'id' => 3,
                    'name' => 'Dhaka',
                    'code' => 30
                
                ],
                [
                    'id' => 4,
                    'name' => 'Khulna',
                    'code' => 40
                
                ],
                [
                    'id' => 5,
                    'name' => 'Rajshahi',
                    'code' => 50
                
                ],
                [
                    'id' => 6,
                    'name' => 'Rangpur',
                    'code' => 55
                
                ],
                [
                    'id' => 7,
                    'name' => 'Sylhet',
                    'code' => 60
                
                ],
            ]);
        

    }
}
