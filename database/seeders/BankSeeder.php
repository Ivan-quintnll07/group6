<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            [
                'name' => "Banco Agrícola",
                'address' => "Boulevard Orden De Malta, Santa Elena, Antiguo Cuscatlán, La Libertad El Salvador ",
                'website' => "https://www.bancoagricola.com/"
            ],
            [
                'name' => "Banco Cuscatlán",
                'address' => "3 Avenida Sur #2-5, Santa Tecla",
                'website' => "https://www.bancocuscatlan.com/persona"
            ],
            [
                'name' => "Banco Davivienda Salvadoreño",
                'address' => "1 Avenida Nte. 2, Santa Tecla",
                'website' => "https://www.davivienda.com.sv/"
            ],
            [
                'name' =>"Banco de América Central",
                'address' => "LAS PALMAS SHOPPING CENTER, LAS PILETAS III VÍA DEL MAR LOTE COMERCIAL III CARRETERA AL PUERTO DE, San Salvador",
                'website' => "https://www.baccredomatic.com/es-sv"
            ],
             [
                'name' => "Banco Promerica",
                'address' => "Centro Comercial 'La Skina', 16 Avenida Nte., Santa Tecla",
                'website' => "https://www.promerica.com.sv/"
             ],
             ];


        Bank::factory(count($banks))->sequence(fn ($sqn) => $banks[$sqn->index])->create();
    }
}
