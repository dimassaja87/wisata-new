<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class GrafikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('coba')->insert([
                'wisata' => $faker->name,
                'jumlah' => $faker->name,
                'created_at' => $faker->dateTimeBetween('-6 month','+1 month')
            ]);
        }
    }
}
