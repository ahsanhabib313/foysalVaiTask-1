<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durations')
            ->insert([
                [
                    'duration' =>'3 Year'
                ],
                [
                    'duration' =>'2 Year'
                ],
                [
                    'duration' =>'1 Year'
                ],
                [
                    'duration' =>'6 Month'
                ],
                [
                    'duration' =>'4 Month'
                ],
                [
                    'duration' =>'3 Month'
                ],
            ]);
    }
}
