<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoCompuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            ['estado_id' => 1, 'compuesto' => 1, 'nombre' => 'Combo Leche', 'referencia' => 'Colanta 1L', 'precio' => '3000', 'unidades_actuales' => 60],
            ['estado_id' => 1, 'compuesto' => 1, 'nombre' => 'Combo Cerveza', 'referencia' => 'Costeña 330ml', 'precio' => '2000', 'unidades_actuales' => 155]
        ]);

        DB::table('producto_compuesto')->insert([
            ['producto_compuesto_id' => 201,'producto_id' => 1],
            ['producto_compuesto_id' => 201,'producto_id' => 2],
            ['producto_compuesto_id' => 201,'producto_id' => 3],
            ['producto_compuesto_id' => 202,'producto_id' => 4],
            ['producto_compuesto_id' => 202,'producto_id' => 5]
        ]);
    }
}
