<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $bodegas = [
            ['nombre' => 'Concepción Centro'],
            ['nombre' => 'Nacimiento'],
            ['nombre' => 'Los Lirios'],
            ['nombre' => 'San Carlos']

        ];

        $marcas = [
            ['nombre' => 'Huawei'],
            ['nombre' => 'TP Link'],
            ['nombre' => 'Linksys'],
            ['nombre' => 'D-Link'],
            ['nombre' => 'Belkin'],
            ['nombre' => 'Cisco'],
            ['nombre' => 'Hikvision']
        ];

        $modelos = [
            ['nombre' => 'E5577', 'marca_id' => 1],
            ['nombre' => 'AX3', 'marca_id' => 1],
            ['nombre' => 'Archer MR600', 'marca_id' => 2],
            ['nombre' => 'TL-MR6400', 'marca_id' => 2],
            ['nombre' => 'WHW0101P', 'marca_id' => 3],
            ['nombre' => 'VLP010x', 'marca_id' => 3],
            ['nombre' => 'DIR-2150', 'marca_id' => 4],
            ['nombre' => 'DIR-846', 'marca_id' => 4],
            ['nombre' => 'DIR-825M', 'marca_id' => 4],
            ['nombre' => 'F5D5231-4', 'marca_id' => 5],
            ['nombre' => 'F5D2231-4', 'marca_id' => 5],
            ['nombre' => 'C881-K9', 'marca_id' => 6],
            ['nombre' => 'CISCO1921', 'marca_id' => 6],
            ['nombre' => 'CISCO3925E', 'marca_id' => 6],
            ['nombre' => 'DS-3E2528', 'marca_id' => 7],
            ['nombre' => 'DS-2CV2Q21FD', 'marca_id' => 7],
        ];


        $dispositivos = [
            ['nombre' => 'Cámara IP', 'modelo_id' => 1, 'bodega_id' => 1],
            ['nombre' => 'Router', 'modelo_id' => 1, 'bodega_id' => 1],
            ['nombre' => 'Switch', 'modelo_id' => 2, 'bodega_id' => 2],
            ['nombre' => 'Modem', 'modelo_id' => 3, 'bodega_id' => 2],
            ['nombre' => 'Gateway', 'modelo_id' => 3, 'bodega_id' => 3],
            ['nombre' => 'Switch', 'modelo_id' => 4, 'bodega_id' => 3],
            ['nombre' => 'Modem', 'modelo_id' => 4, 'bodega_id' => 3],
            ['nombre' => 'Gateway', 'modelo_id' => 5, 'bodega_id' => 3],
            ['nombre' => 'Cámara IP', 'modelo_id' => 5, 'bodega_id' => 3],
            ['nombre' => 'Router', 'modelo_id' => 6, 'bodega_id' => 4],
            ['nombre' => 'Switch', 'modelo_id' => 6, 'bodega_id' => 4],
            ['nombre' => 'Modem', 'modelo_id' => 7, 'bodega_id' => 4],
            ['nombre' => 'Gateway', 'modelo_id' => 7, 'bodega_id' => 4],
            ['nombre' => 'Cámara IP', 'modelo_id' => 7, 'bodega_id' => 4],

        ];

        DB::table('bodegas')->insert($bodegas); // Inserta bodegas
        DB::table('marcas')->insert($marcas); // Inserta marcas
        DB::table('modelos')->insert($modelos); // Inserta modelos
        DB::table('dispositivos')->insert($dispositivos); // Inserta dispositivos
    }
}
