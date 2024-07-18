<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            BankSeeder::class,
            CardTypeSeeder::class,
            UserSeeder::class,
            CardSeeder::class,
           // CalendarSeeder::class,
            PromotionSeeder::class,
        ]);
    }
}
