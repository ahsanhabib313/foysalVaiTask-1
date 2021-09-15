<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('districts')->delete();
        Schema::enableForeignKeyConstraints();

        DB::table('districts')
            ->insert([
                [
                    'id' => 1,
                    'division_id' => 1,
                    'name' => 'Barisal',
                    'code' => 6
                
                ],
                [
                    'id' => 2,
                    'division_id' => 1,
                    'name' => 'Barguna',
                    'code' => 4
                
                ],
                [
                    'id' => 3,
                    'division_id' => 1,
                    'name' => 'Bhola',
                    'code' => 9
                
                ],
                [
                    'id' => 4,
                    'division_id' => 1,
                    'name' => 'Jhalokati',
                    'code' => 42
                
                ],
                [
                    'id' => 5,
                    'division_id' => 1,
                    'name' => 'Patuakhali',
                    'code' => 78
                
                ],
                [
                    'id' => 6,
                    'division_id' => 1,
                    'name' => 'Pirojpur',
                    'code' => 79
                
                ],
                [
                    'id' => 7,
                    'division_id' => 2,
                    'name' => 'Chittagong',
                    'code' => 15
                
                ],
                [
                    'id' => 8,
                    'division_id' => 2,
                    'name' => 'Bandarban',
                    'code' => 3
                
                ],
                [
                    'id' => 9,
                    'division_id' => 2,
                    'name' => 'Brahamanbaria',
                    'code' => 12
                
                ],
                [
                    'id' => 10,
                    'division_id' => 2,
                    'name' => 'Chandpur',
                    'code' => 13
                
                ],
                [
                    'id' => 11,
                    'division_id' => 2,
                    'name' => 'Comilla',
                    'code' => 19
                
                ],
                [
                    'id' => 12,
                    'division_id' => 2,
                    'name' => 'Cox Bazar',
                    'code' => 22
                
                ],
                [
                    'id' => 13,
                    'division_id' => 2,
                    'name' => 'Feni',
                    'code' => 30
                
                ],
            ]);
    }
}
