<?php

use Illuminate\Database\Seeder;

class SearchTypesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\SearchType:: create([
            'type'=>'Escrever',
        ]);

        \App\SearchType:: create([
            'type'=>'Fotografia',
        ]);

        \App\SearchType:: create([
            'type'=>'Voz',
        ]);
    }

}
