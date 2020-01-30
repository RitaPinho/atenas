<?php

use Illuminate\Database\Seeder;

class AuthorUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\AuthorUser::create([
            'author_id'=>11,
            'user_id'=>5
        ]);

        \App\AuthorUser::create([
            'author_id'=>4,
            'user_id'=>6
        ]);

        \App\AuthorUser::create([
            'author_id'=>5,
            'user_id'=>7
        ]);

        \App\AuthorUser::create([
            'author_id'=>6,
            'user_id'=>4
        ]);

        \App\AuthorUser::create([
            'author_id'=>9,
            'user_id'=>3
        ]);
    }
}
