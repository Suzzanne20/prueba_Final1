<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use App\Models\Transporte;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $proveedor= new Proveedor();
        $proveedor->codigo_proveedor='ABC1234';
        $proveedor->nombre_proveedor='Proveeodr 2';
        $proveedor->direccion='Entre Rios';
        $proveedor->telefono='78964213';
        $proveedor->save();

        $this->call(TransporteSeeder::class);
        $this->call(CamionSeeder::class);

    }
}
