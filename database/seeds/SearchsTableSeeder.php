<?php

use Illuminate\Database\Seeder;

class SearchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Search::create([
            'text'=>'Incêndios Florestais',
            'image'=>'',
            'user_id'=>3,
            'search_type_id'=>1
        ]);

        \App\Search::create([
            'text'=>'África',
            'image'=>'images/searches/africa.jpg',
            'user_id'=>4,
            'search_type_id'=>2
        ]);

        \App\Search::create([
            'text'=>'Imigrantes',
            'image'=>'',
            'user_id'=>5,
            'search_type_id'=>3
        ]);
    }
}
