<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CardType;
use App\Models\Bank;
use App\Models\User;
use App\Models\Card;
use App\Models\Calendar;
use App\Models\Promotion;

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
            CalendarSeeder::class,
            PromotionSeeder::class,
        ]);
    }
}
