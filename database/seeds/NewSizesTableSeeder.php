<?php

use Illuminate\Database\Seeder;

class NewSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\NewsSize::create([
            'size'=>'Curta',
        ]);

        \App\NewsSize::create([
            'size'=>'Média',
        ]);

        \App\NewsSize::create([
            'size'=>'Longa',
        ]);
    }
}
