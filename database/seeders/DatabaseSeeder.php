<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $admin = new \App\Models\Administrador();
        // $admin->usuario = 'admin';
        // $admin->nombre = 'Jose Alfredo';
        // $admin->email = 'chpgomez928@gmail.com';
        // $admin->telefono = '91927827398';
        // $admin->pass = Hash::make('admin.pedido');
        // $admin->save();
        $cliente = new \App\Models\Cliente();
        $cliente->usuario = 'pruebas';
        $cliente->nombre = 'Jose Alfredo';
        $cliente->email = 'chpgomez928@gmail.com';
        $cliente->telefono = '91927827398';
        $cliente->pass = Hash::make('cliente.123');
        $cliente->direccion = 'Conocida';
        $cliente->colonia = 'centro';
        $cliente->ciudad = 'ocosingo';
        $cliente->municipio = 'Ocosingo';
        $cliente->estado = 'chiapas';
        $cliente->save(); 

    }
}
    