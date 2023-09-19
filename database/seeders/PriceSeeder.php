<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            'hall_id' => 1,
            'status' => 'standart',
            'price' => 350
        ]);

        DB::table('prices')->insert([
            'hall_id' => 1,
            'status' => 'vip',
            'price' => 450
        ]);
    }
}
