<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;
use App\Models\Promotion;

class PromotionSeeder extends Seeder
{
    public function run(): void
    {
        Promotion::truncate();

        $bank = Bank::where('name', 'Banco Agrícola')->first();

        if (!$bank) {
            throw new \Exception("El banco 'Banco Agrícola' no se encontró. Asegúrete de haber corrido el seeder de bancos antes que este.");
        }

        $promotions = [
            [
                'bank_id' => $bank->id,
                'business' => 'McDonalds',
                'image' => 'mac.png',
                'logo' => 'mac.png',
                'title' => 'McNífica™ de Res',
                'benefit' => 'Una McNífica de Res con papas grandes',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Del 1 al 31 de mayo*',
                'category' => 'Restaurante',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Juan Valdez Café',
                'image' => 'cafe.jpg',
                'logo' => 'juanvaldez_logo.jpg',
                'title' => 'Combo Quesadilla + Café 9oz',
                'benefit' => 'Descuento en menú y merch al pagar con tarjetas.',
                'restriction' => 'Aplica solo con tarjetas de Banco Agrícola.',
                'category' => 'Restaurante',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Super Selectos',
                'image' => 'super.png',
                'logo' => 'super.png',
                'title' => '10% de descuento en compras mayores a $50',
                'benefit' => 'Aplica al pagar con tarjeta de crédito los fines de semana.',
                'restriction' => 'Válido sólo los sábados y domingos de julio.',
                'category' => 'Supermercado',
            ],

                        [
                'bank_id' => $bank->id,
                'business' => 'Super Selectos',
                'image' => 'principal1.jpg',
                'logo' => 'super.png',
                'title' => '10% de descuento en compras mayores a $50',
                'benefit' => 'Aplica al pagar con tarjeta de crédito los fines de semana.',
                'restriction' => 'Válido sólo los sábados y domingos de julio.',
                'category' => 'Supermercado',
            ],

                        [
                'bank_id' => $bank->id,
                'business' => 'Super Selectos',
                'image' => 'principal2.jpg',
                'logo' => 'super.png',
                'title' => '10% de descuento en compras mayores a $50',
                'benefit' => 'Aplica al pagar con tarjeta de crédito los fines de semana.',
                'restriction' => 'Válido sólo los sábados y domingos de julio.',
                'category' => 'Supermercado',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'La Curacao',
                'image' => 'jbl.png',
                'logo' => 'jbl.png',
                'title' => 'Hasta 20% de descuento en televisores LG',
                'benefit' => 'Aplica en tienda y en línea con tarjeta de crédito.',
                'restriction' => 'Promoción vigente del 5 al 25 de julio.',
                'category' => 'Electrónica',
            ],

                       [
                'bank_id' => $bank->id,
                'business' => 'La Curacao',
                'image' => 'sam.png',
                'logo' => 'sam.png',
                'title' => 'Hasta 40000% de descuento en Huawei',
                'benefit' => 'Aplica en tienda y en línea con tarjeta de crédito.',
                'restriction' => 'Promoción vigente del 5 al 25 de julio.',
                'category' => 'Electrónica',
            ],

                       [
                'bank_id' => $bank->id,
                'business' => 'La Curacao',
                'image' => 'Hua.png',
                'logo' => 'Hua.png',
                'title' => 'Hasta 3000% de descuento en samsung',
                'benefit' => 'Aplica en tienda y en línea con tarjeta de crédito.',
                'restriction' => 'Promoción vigente del 5 al 25 de julio.',
                'category' => 'Electrónica',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Zara',
                'image' => 'PP1.jpg',
                'logo' => 'PP1.jpg',
                'title' => '15% de descuento en la nueva colección',
                'benefit' => 'Promoción exclusiva para clientes con tarjeta débito.',
                'restriction' => 'No acumulable con otras ofertas.',
                'category' => 'Moda',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Avianca',
                'image' => 'ro1.jpg',
                'logo' => 'ro1.jpg',
                'title' => '20% de descuento en boletos a Miami',
                'benefit' => 'Reserva y paga con tu tarjeta para obtener el descuento.',
                'restriction' => 'Viajes entre el 1 de agosto y 30 de septiembre.',
                'category' => 'Viajes',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Pizza Hut',
                'image' => 'pi.jpg',
                'logo' => 'pi.jpg',
                'title' => '2x1 en pizzas medianas',
                'benefit' => 'Solo los martes con tarjeta de crédito.',
                'restriction' => 'No aplica a domicilio.',
                'category' => 'Restaurante',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Starbucks',
                'image' => 'co.png',
                'logo' => 'co.png',
                'title' => 'Bebida gratis en tu cumpleaños',
                'benefit' => 'Al presentar tu tarjeta y DUI.',
                'restriction' => 'Solo una vez al año.',
                'category' => 'Restaurante',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Aliss',
                'image' => 'ro2.jpg',
                'logo' => 'ro2.jpg',
                'title' => '30% en ropa seleccionada',
                'benefit' => 'Solo con tarjeta Banco Agrícola.',
                'restriction' => 'Hasta agotar existencias.',
                'category' => 'Moda',
            ],

                        [
                'bank_id' => $bank->id,
                'business' => 'Aliss',
                'image' => 'ro3.png',
                'logo' => 'ro3.png',
                'title' => '30% en ropa seleccionada',
                'benefit' => 'Solo con tarjeta Banco Agrícola.',
                'restriction' => 'Hasta agotar existencias.',
                'category' => 'Moda',
            ],

                        [
                'bank_id' => $bank->id,
                'business' => 'Aliss',
                'image' => 'ro4.png',
                'logo' => 'ro4.png',
                'title' => '90% en ropa seleccionada',
                'benefit' => 'Solo con tarjeta Agricola.',
                'restriction' => 'Hasta agotar existencias.',
                'category' => 'Moda',
            ],

                        [
                'bank_id' => $bank->id,
                'business' => 'Aliss',
                'image' => 'gucci.png',
                'logo' => 'gucci.png',
                'title' => '400% en ropa seleccionada',
                'benefit' => 'Solo con tarjeta Brandon.',
                'restriction' => 'Hasta agotar existencias.',
                'category' => 'Moda',
            ],
            [
                'bank_id' => $bank->id,
                'business' => 'Siman',
                'image' => 'versa.png',
                'logo' => 'versa.png',
                'title' => 'Cuotas sin intereses',
                'benefit' => 'Hasta 12 meses sin intereses.',
                'restriction' => 'Aplican restricciones.',
                'category' => 'Moda',
            ],
        ];

        foreach ($promotions as $promotion) {
            Promotion::create($promotion);
        }
    }
}
