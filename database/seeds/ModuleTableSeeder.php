<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_modulo')->insert([
            [
                'modulo' => 'Oficina Central'
            ]
        ]);
    }
}
