<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_sistema')->insert([
            [
                'sistema' => 'Licencias Tipo A'
            ],
            [
                'sistema' => 'Licencias Tipo B'
            ],
            [
                'sistema' => 'Licencias Tipo C'
            ],
            [
                'sistema' => 'Licencias Tipo D'
            ],
            [
                'sistema' => 'Licencias Tipo E'
            ],
            [
                'sistema' => 'Sarve'
            ],
            [
                'sistema' => 'Oklahoma Particular'
            ],
            [
                'sistema' => 'Sistema Taxi'
            ],
            [
                'sistema' => 'Revista Taxi'
            ],
            [
                'sistema' => 'Alfred'
            ],
        ]);
    }
}
