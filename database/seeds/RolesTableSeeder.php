<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'nombre' => 'assign_ticket',
                'descripcion' => 'Asignar Tickets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'response_ticket',
                'descripcion' => 'Responder Tickets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'create_ticket',
                'descripcion' => 'Responder Tickets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'manage_users',
                'descripcion' => 'Administrar Usuarios',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
