<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('producto')->insert([
            ['nombre'=>'Leche','referencia'=>'Colanta 1L','precio'=>'3000','unidades_actuales'=>'300','estado_id'=>1],
            ['nombre'=>'Leche','referencia'=>'Parmalat 2L','precio'=>'6000','unidades_actuales'=>'200','estado_id'=>1],
            ['nombre'=>'Detergente liquido','referencia'=>'Ajax 1L','precio'=>'2500','unidades_actuales'=>'100','estado_id'=>2],
            ['nombre'=>'Leche','referencia'=>'1L','precio'=>'3000','unidades_actuales'=>'300','estado_id'=>1],
            ['nombre'=>'Leche','referencia'=>'1L','precio'=>'3000','unidades_actuales'=>'300','estado_id'=>1],
            ['nombre'=>'Leche','referencia'=>'1L','precio'=>'3000','unidades_actuales'=>'300','estado_id'=>1],
            ['nombre'=>'Leche','referencia'=>'1L','precio'=>'3000','unidades_actuales'=>'300','estado_id'=>1],
        ]);
    }
}
