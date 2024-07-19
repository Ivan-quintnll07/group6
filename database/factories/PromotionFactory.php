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
            "bank_id" => $this->banks()->random(),
            "business" => fake()->name(),
            "title" => fake()->sentence(),
            "benefit" => fake()->sentence(),
            "restriction" => fake()->sentence(),
            "category" => fake()->randomElement([
                'Descuento',
                'Cashback',
                'Puntos',
                'Millas'
            ]),
            "start" => fake()->dateTimeInInterval('-5 days', '+5 days'),
            "end" => function ($attributes) {
                return fake()->dateTimeBetween($attributes['start'], '+10 hours');
            }
            //"card_type_id" => $this->cardTypes()->random(),
        ];
    }
}
