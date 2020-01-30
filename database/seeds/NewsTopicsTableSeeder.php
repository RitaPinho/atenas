<?php

use Illuminate\Database\Seeder;

class NewsTopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\NewsTopic::create([
            'news_id'=>1,
            'topic_id'=>55
        ]);

        \App\NewsTopic::create([
            'news_id'=>1,
            'topic_id'=>27
        ]);

        \App\NewsTopic::create([
            'news_id'=>2,
            'topic_id'=>14
        ]);

        \App\NewsTopic::create([
            'news_id'=>2,
            'topic_id'=>21
        ]);

        \App\NewsTopic::create([
            'news_id'=>3,
            'topic_id'=>8
        ]);

        \App\NewsTopic::create([
            'news_id'=>3,
            'topic_id'=>1
        ]);

        \App\NewsTopic::create([
            'news_id'=>4,
            'topic_id'=>66
        ]);

        \App\NewsTopic::create([
            'news_id'=>4,
            'topic_id'=>26
        ]);

        \App\NewsTopic::create([
            'news_id'=>5,
            'topic_id'=>19
        ]);
    }
}
