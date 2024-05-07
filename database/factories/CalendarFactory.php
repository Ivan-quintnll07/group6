<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calendar>
 */
class CalendarFactory extends Factory
{
    public function cards()
    {
        return once(fn() => Card::pluck('id'));
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "event" => fake()->paragraph(),
            "pay_date"=> fake()->date(),
            "cutoff_date" => fake()->date(),
            "card_id" => $this->cards()->random(),
        ];
    }
}
