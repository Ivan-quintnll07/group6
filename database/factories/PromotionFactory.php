<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\CardType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{

    public function banks()
    {
        return once(fn() => Bank::pluck('id'));
    }
    public function cardTypes()
    {
        return once(fn() => CardType::pluck('id'));
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            "description" => fake()->paragraph(),
            "discount_percentage" => fake()->randomFloat(1,0,100),
            "bank_id" => $this->banks()->random(),
            "card_type_id" => $this->cardTypes()->random(),
        ];
    }
}
