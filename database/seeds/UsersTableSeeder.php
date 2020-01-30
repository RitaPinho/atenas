<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'username' => 'Administrator',
           'email' => 'admin@tdi.pt',
           'image'=>'images/users/admin.jpg',
           'password' => Hash::make('admin123'),
           'role_id' => 1,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Manager',
            'email' => 'manager@tdi.pt',
            'image'=>'images/users/manager.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Miguel Esteves Cardoso',
            'email' => 'opiniao@publico.pt',
            'image'=>'images/users/miguel.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Victor Ferreira',
            'email' => 'voferreira@publico.pt',
            'image'=>'images/users/victor.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Leonete Botelho ',
            'email' => 'lbotelho@publico.pt',
            'image'=>'images/users/botelho.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Patrícia Carvalho',
            'email' => 'patricia.carvalho@publico.pt',
            'image'=>'images/users/patricia.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Sofia Neves',
            'email' => 'sofia.neves@publico.pt',
            'image'=>'images/users/sofia.jpg',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);


        factory('App\User', 20)->create();
    }
}
