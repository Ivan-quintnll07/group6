<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\CardType;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    public function users()
    {
        return once(fn () => User::pluck('id'));
    }

    public function cardTypes()
    {
        return once(fn() => CardType::pluck('id'));
    }

    public function banks()
    {
        return once(fn() => Bank::pluck('id'));
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "expiry_date"=> fake()->creditCardExpirationDateString(),
            "user_id" => $this->users()->random(),
            "card_type_id" => $this->cardTypes()->random(),
            "bank_id" => $this->banks()->random(),
            "cut_off_date" => fake()->date(),
        ];
    }
}
