<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpozillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('upozillas')->delete();
        Schema::enableForeignKeyConstraints();

        DB::table('upozillas')
            ->insert([
                [
                    'id' => 1,
                    'district_id' => 2,
                    'name' => 'Amtali',
                    'code' => 9
                
                ],
                [
                    'id' => 2,
                    'district_id' => 2,
                    'name' => 'Bamna',
                    'code' => 19
                
                ],
                [
                    'id' => 3,
                    'district_id' => 2,
                    'name' => 'Barguna Sadar',
                    'code' => 28
                
                ],
                [
                    'id' => 4,
                    'district_id' => 2,
                    'name' => 'Betagi',
                    'code' => 47
                
                ],
                [
                    'id' => 5,
                    'district_id' => 2,
                    'name' => 'Patharghata',
                    'code' => 85
                
                ],
                [
                    'id' => 6,
                    'district_id' => 2,
                    'name' => 'Taltali',
                    'code' => 92
                
                ],


                [
                    'id' => 7,
                    'district_id' => 1,
                    'name' => 'Agailjhara',
                    'code' => 2
                
                ],
                [
                    'id' =>8,
                    'district_id' => 1,
                    'name' => 'Babuganj',
                    'code' => 3
                
                ],
                [
                    'id' => 9,
                    'district_id' => 1,
                    'name' => 'Bakerganj',
                    'code' => 7
                
                ],
                [
                    'id' => 10,
                    'district_id' => 1,
                    'name' => 'Banaripara',
                    'code' => 10
                
                ],
                [
                    'id' => 11,
                    'district_id' => 1,
                    'name' => 'Gaurnadi',
                    'code' => 32
                
                ]
                
            ]);
    }
}
