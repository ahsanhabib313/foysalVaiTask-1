<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('qualifications')->delete();
        DB::table('qualifications')
            ->insert([
                [
                    'name' => 'SSC'
                ],
                [
                    'name' => 'HSC'
                ],
                [
                    'name' => 'Honors'
                ],
                [
                    'name' => 'Masters'
                ]
            ]);
        
    }
}
