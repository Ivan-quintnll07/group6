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
                'image' => 'hamburguesa.jpg',
                'logo' => 'mcdonalds_logo.png',
                'title' => 'McNífica™ de Res',
                'benefit' => 'Una McNífica de Res con papas grandes',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante'
            ],

            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Juan Valdez Café',
                'image' => 'cafe.jpg',
                'logo' => 'juanvaldez_logo.jpg',
                'title' => 'Por una quesadilla y café de 9oz',
                'benefit' => 'Obtén descuento en menú y merch al pagar con tus Tarjetas de Crédito o Débito.',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Pizza Hut',
                'image' => 'pizza_hut.jpg',
                'logo' => 'pizzahut_logo.png',
                'title' => 'Pan de pizza (Tu segunda pizza a $5)',
                'benefit' => 'Obtén tu segunda pizza gigante a $5.',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Sushi itto',
                'image' => 'sushiitto.jpeg',
                'logo' => 'sushiitto_logo.jpg',
                'title' => '15 rollos de sushi de salmón  ',
                'benefit' => '15 rollos de sushi de salmón con tu soda favorita ',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'La tecleña',
                'image' => 'teclena.jpeg',
                'logo' => 'lateclena_logo.png',
                'title' => 'Pack tecleño tradicional a un super precio',
                'benefit' => 'Llevate tu pack tecleño tradicional a un super precio ',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Restaurante'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Viaje',
                'image' => 'viaje.jpeg',
                'logo' => 'bancoagricola_logo.png',
                'title' => 'Copa América: Costa Rica vs Colombia en Phoenix',
                'benefit' => '- Tiquete aéreo San José - Phoenix - San José vía United Airlines
                - 3 noches de alojamiento con desayunos en el Hampton Inn & Suite Phoenix Glendale
                -Traslados aeropuerto - hotel - aeropuerto
                - Entrada al estadio para el partido
                - Traslado hotel - estadio - hotel',
                'restriction' => "Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*",
                'category' => "Viajes"
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Agrícola')->first()->id,
                'business' => 'Viaje',
                'image' => 'viaje.jpeg',
                'logo'=> 'bancoagricola_logo.png',
                'title' => 'Ciudad de México',
                'benefit' => '- Traslados aeropuerto - hotel- aeropuerto
                    - 4 noches de alojamiento con desayuno en habitación doble en el Hotel Regente
                    - Traslados hotel - autódromo - hotel los 3 días del evento ',
                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Viajes'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Fedecrédito')->first()->id,
                'business' => 'Óptica Devlyn',
                'image' => 'devlyn.png',
                'logo' => 'delvyn_logo.jpeg',
                'title' => '30% de descuento en lentes Transition en ópticas Devlyn',
                'benefit' => '30% de descuento aplica para lente graduado desde -3.00 a +3.00 con cilindro hasta -2.00 descuento aplica en la compra de Aro de Diseñador con un costo mayor a $100.00. ',
                'restriction' => 'No aplica compras en línea, ni con otras promociones o descuentos vigentes.
                    Los cambios en las condiciones durante la vigencia de la promoción son responsabilidad del comercio. ',
                'category' => 'Salud'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Fedecrédito')->first()->id,
                'business' => 'Salud a tu alcance',
                'image' => 'salud_a_tu_alcance.jpeg',
                'logo' => 'saludatualcance_logo.png',
                'title' => 'Descuentos en Laboratorios identificados por la red SALUD A TU ALCANCE ',
                'benefit' => '-Plan A: Para ti, tu cónyuge e hijos solteros menores de 24 años
               - Plan B: Si eres soltero, para ti y tus padres
                -Plan C: Si eres madre soltera, para ti, tus hijos (máximo 2) y tus padres
                -Asesoría Médica telefónica en horarios inhábiles y días festivos
                -Descuentos con médicos de otras especialidades de la red de SALUD A TU ALCANCE ',
                'category' => 'Salud'
            ],

            [
                'bank_id' => Bank::where('name', 'Banco Cuscatlán')->first()->id,
                'business' => 'Cinepolis',
                'image' => 'cinepolis.jpeg',
                'logo' => 'cinepolis_logo.jpeg',
                'title' => '30% de descuento* en el combo AMIGOS ',
                'benefit' => 'Precio Débito CUSCATLAN $8.86 | Precio normal: $12.65
                              Incluye: 2 bebidas grandes + 1canasta de palomitas JUMBO ',
                'restriction' => '*Válido al pagar con Tarjetas de Débito CUSCATLAN. Aplica solo en combo AMIGOS de CINEPOLIS El Salvador, con 2 bebidas grandes y 1 canasta de palomitas JUMBO. Combo aplica únicamente en palomitas saladas. No aplica en conjunto con otras promociones o descuentos. No participan en la promoción compras realizadas con Tarjeta de Débito Empresariales de Banco CUSCATLAN. El otorgamiento del descuento es exclusiva responsabilidad de Cinépolis.
                Promoción válida 1 de abril al 31 de julio del 2024. hasta agotar existencias ',
                'category' => 'Otros'
            ],
            [
                'bank_id' => Bank::where('name', 'Banco Fedecrédito')->first()->id,
                'business' => 'Viaje',
                'image' => 'viaje.jpeg',
                'logo' => 'fedecredito_logo.jpg',
                'title' => 'Viaje Internacional, Europa',
                'benefit' => '
                Incluye:
                - Traslados aeropuerto
                - Hotel
                - Aeropuerto.
                - Transporte en autocar climatizado según la ruta indicada.
                - Alojamiento en hoteles previstos o similares en habitación doble con baño o ducha. ',

                'restriction' => 'Al pagar con tarjeta de Débito o Crédito *Desde el 1 de Mayo al 31*',
                'category' => 'Viajes'
            ],
        ];

        Promotion::factory(count($promotions))->sequence(fn($sqn) => $promotions[$sqn->index])->create();
    }
}

