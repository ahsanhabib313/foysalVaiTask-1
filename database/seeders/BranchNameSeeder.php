<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BranchNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('branch_names')->delete();
        Schema::enableForeignKeyConstraints();

        DB::table('branch_names')
            ->insert([
                [
                  
                    'name' => 'Barisal Health Education & Development Foundation',
                    'address' => 'Barisal'
                
                ],
                [
                    'name' => 'Chandpur Health Education & Development Foundation',
                    'address' => 'Chandpur'
                
                ],
                [
                    'name' => 'Dhaka Health Education & Development Foundation',
                    'address' => 'Dhaka'
                
                ],
                [
                    'name' => 'Comilla Health Education & Development Foundation',
                    'address' => 'Comilla'
                
                ],
                [
                    'name' => 'GAzipur Health Education & Development Foundation',
                    'address' => 'Barisal'
                
                ]
               
            ]);
    }
}
