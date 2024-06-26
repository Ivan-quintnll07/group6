<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;
use App\Models\Bank;


class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'McDonalds',
                'title' => "McNífica™ de Res",
                'benefit' => 'Una McNífica de Res con papas grandes',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],

            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'Juan Valdez Café',
                'title' => "Por una quesadilla y café de 9oz",
                'benefit' => 'Obtén descuento en menú y merch al pagar con tus Tarjetas de Crédito o Débito.',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],
            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'Pizza Hut',
                'title' => "Pan de pizza (Tu segunda pizza a $5",
                'benefit' => 'Obtén tu segunda pizza gigante a $5.',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],
            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'Sushi itto',
                'title' => "15 rollos de sushi de salmón  ",
                'benefit' => '15 rollos de sushi de salmón con tu soda favorita ',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],
            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'KFC',
                'title' => "15 rollos de sushi de salmón  ",
                'benefit' => '15 rollos de sushi de salmón con tu soda favorita ',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],
            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'La tecleña',
                'title' => "Pack tecleño tradicional a un super precio",
                'benefit' => 'Llevate tu pack tecleño tradicional a un super precio ',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Restaurante"
            ],
            [
                'bank_id' => Bank::where('name','Banco Agrícola')->first()->id,
                'business' => 'La tecleña',
                'title' => "Pack tecleño tradicional a un super precio",
                'benefit' => 'Llevate tu pack tecleño tradicional a un super precio ',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Viajes"
            ],
        ];

        Promotion::factory(count($promotions))->sequence(fn ($sqn) => $promotions[$sqn->index])->create();
    }
}
