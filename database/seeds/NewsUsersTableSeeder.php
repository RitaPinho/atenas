<?php

use Illuminate\Database\Seeder;

class NewsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\NewsUser::create([
            'news_id'=>1,
            'user_id'=>5,
            'collection_id'=>'5'
        ]);

        \App\NewsUser::create([
            'news_id'=>2,
            'user_id'=>6,
            'collection_id'=>'6'
        ]);

        \App\NewsUser::create([
            'news_id'=>3,
            'user_id'=>7,
            'collection_id'=>'7'
        ]);

        \App\NewsUser::create([
            'news_id'=>4,
            'user_id'=>4,
            'collection_id'=>'4'
        ]);

        \App\NewsUser::create([
            'news_id'=>5,
            'user_id'=>3,
            'collection_id'=>'3'
        ]);
    }
}
