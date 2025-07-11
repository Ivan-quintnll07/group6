<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpiar la tabla para evitar duplicados
        Promotion::truncate();

        $promotions = [
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'McDonalds',
                'image' => 'hamburguesa.jpg',
                'logo' => 'mcdonalds_logo.png',
                'title' => 'McNífica™ de Res',
                'benefit' => 'Una McNífica de Res con papas grandes',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante',
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Juan Valdez Café',
                'image' => 'cafe.jpg',
                'logo' => 'juanvaldez_logo.jpg',
                'title' => 'Por una quesadilla y café de 9oz',
                'benefit' => 'Obtén descuento en menú y merch al pagar con tus Tarjetas de Crédito o Débito.',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante',
            ],
            // Agrega más promociones aquí según necesites
        ];

        foreach ($promotions as $promotion) {
            Promotion::create($promotion);
        }
    }
}
