<?php

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Publication::create([
            'name'=>'Público'
        ]);

        \App\Publication::create([
            'name'=>'P2'
        ]);

        \App\Publication::create([
            'name'=>'Ípsilon'
        ]);

        \App\Publication::create([
            'name'=>'Ímpar'
        ]);

        \App\Publication::create([
            'name'=>'Fugas'
        ]);

        \App\Publication::create([
            'name'=>'P3'
        ]);

        \App\Publication::create([
            'name'=>'Cinecartaz'
        ]);
    }
}
