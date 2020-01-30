<?php

use Illuminate\Database\Seeder;

class CategoryUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\CategoryUser::create([
            'user_id'=>3,
            'category_id'=>1
        ]);

        \App\CategoryUser::create([
            'user_id'=>3,
            'category_id'=>4
        ]);

        \App\CategoryUser::create([
            'user_id'=>3,
            'category_id'=>6
        ]);

        \App\CategoryUser::create([
            'user_id'=>3,
            'category_id'=>39
        ]);

        \App\CategoryUser::create([
            'user_id'=>4,
            'category_id'=>9
        ]);

        \App\CategoryUser::create([
            'user_id'=>4,
            'category_id'=>17
        ]);

        \App\CategoryUser::create([
            'user_id'=>4,
            'category_id'=>15
        ]);

        \App\CategoryUser::create([
            'user_id'=>4,
            'category_id'=>20
        ]);

        \App\CategoryUser::create([
            'user_id'=>5,
            'category_id'=>3
        ]);

        \App\CategoryUser::create([
            'user_id'=>5,
            'category_id'=>16
        ]);

        \App\CategoryUser::create([
            'user_id'=>5,
            'category_id'=>25
        ]);

        \App\CategoryUser::create([
            'user_id'=>5,
            'category_id'=>33
        ]);

        \App\CategoryUser::create([
            'user_id'=>6,
            'category_id'=>2
        ]);

        \App\CategoryUser::create([
            'user_id'=>6,
            'category_id'=>6
        ]);

        \App\CategoryUser::create([
            'user_id'=>6,
            'category_id'=>11
        ]);

        \App\CategoryUser::create([
            'user_id'=>6,
            'category_id'=>38
        ]);

        \App\CategoryUser::create([
            'user_id'=>7,
            'category_id'=>14
        ]);

        \App\CategoryUser::create([
            'user_id'=>7,
            'category_id'=>25
        ]);

        \App\CategoryUser::create([
            'user_id'=>7,
            'category_id'=>22
        ]);

        \App\CategoryUser::create([
            'user_id'=>7,
            'category_id'=>35
        ]);
        /*
        \App\CategoryUser::create([
            'user_id'=>2,
            'category_id'=>5
        ]);

        \App\CategoryUser::create([
            'user_id'=>2,
            'category_id'=>16
        ]);

        \App\CategoryUser::create([
            'user_id'=>2,
            'category_id'=>18
        ]);

        \App\CategoryUser::create([
            'user_id'=>2,
            'category_id'=>28
        ]);

        \App\CategoryUser::create([
            'user_id'=>1,
            'category_id'=>3
        ]);

        \App\CategoryUser::create([
            'user_id'=>1,
            'category_id'=>5
        ]);

        \App\CategoryUser::create([
            'user_id'=>1,
            'category_id'=>36
        ]);

        \App\CategoryUser::create([
            'user_id'=>1,
            'category_id'=>30
        ]);
        */


    }
}
