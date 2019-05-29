<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadoTableSeeder::class);        
        factory(Producto::class, 200)->create();
        $this->call(ProductoCompuestoTableSeeder::class);
    }
}
