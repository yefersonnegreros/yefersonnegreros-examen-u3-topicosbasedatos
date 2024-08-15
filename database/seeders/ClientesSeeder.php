<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            [
                'nombres' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'direccion' => 'Av. Arequipa 123, Lima',
                'fono' => '994567890',
            ],
            [
                'nombres' => 'María Rodríguez',
                'email' => 'maria.rodriguez@example.com',
                'direccion' => 'Jr. Puno 456, Arequipa',
                'fono' => '987654321',
            ],
            [
                'nombres' => 'Carlos Fernández',
                'email' => 'carlos.fernandez@example.com',
                'direccion' => 'Calle San Martín 789, Cusco',
                'fono' => '961234567',
            ],
            [
                'nombres' => 'Ana Gómez',
                'email' => 'ana.gomez@example.com',
                'direccion' => 'Av. Grau 321, Trujillo',
                'fono' => '962345678',
            ],
            [
                'nombres' => 'Luis Morales',
                'email' => 'luis.morales@example.com',
                'direccion' => 'Calle Los Olivos 654, Piura',
                'fono' => '963456789',
            ],
            [
                'nombres' => 'Fernanda Díaz',
                'email' => 'fernanda.diaz@example.com',
                'direccion' => 'Av. Javier Prado 987, Lima',
                'fono' => '971234567',
            ],
        ];

        DB::table('clientes')->insert($clientes);
    }
}
