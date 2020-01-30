<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Author::create([
            'name'=>'Célia Rodrigues',
            'description'=>'Parte da equipa de Infogafia do Público.',
            'email'=>'celia.rodrigues@publico.pt',
            'job_id'=>19
        ]);

        \App\Author::create([
            'name'=>'Andrea Espadinha',
            'description'=>'Designer do Público há 5 anos.',
            'email'=>'andrea.Espadinha@publico.pt',
            'job_id'=>11
        ]);

        \App\Author::create([
            'name'=>'Amílcar Correia',
            'description'=>'Director Adjunto, responsável pelo online do PÚBLICO.',
            'email'=>'acorreia@publico.pt',
            'job_id'=>5
        ]);

        \App\Author::create([
            'name'=>'Vítor Ferreira',
            'description'=>'Jornalistas do Público.',
            'email'=>'voferreira@publico.pt',
            'job_id'=>1
        ]);

        \App\Author::create([
            'name'=>'Leonete Botelho',
            'description'=>'Jornalistas do Público.',
            'email'=>'lbotelho@publico.pt',
            'job_id'=>1
        ]);

        \App\Author::create([
            'name'=>'Patrícia Carvalho',
            'description'=>'Jornalistas do Público.',
            'email'=>'patricia.carvalho@publico.pt',
            'job_id'=>1
        ]);

        \App\Author::create([
            'name'=>'Clara Barata',
            'description'=>'Faz parte da equipa do Público como Sub-Editora da categoria Mundo.',
            'email'=>'clara.barata@publico.pt',
            'job_id'=>18
        ]);

        \App\Author::create([
            'name'=>'Álvaro Domingues',
            'description'=>'Professor da Faculdade de Arquitetura da Universidade do Porto.',
            'email'=>'alvaro.domingues@publico.pt',
            'job_id'=>3
        ]);

        \App\Author::create([
            'name'=>'Sofia Neves',
            'description'=>'Jornalistas do Público.',
            'email'=>'sofia.neves@publico.pt',
            'job_id'=>1
        ]);

        \App\Author::create([
            'name'=>'Filipe Ribeiro',
            'description'=>'Designer Digital do Público.',
            'email'=>'filipe.ribeiro@publico.pt',
            'job_id'=>20
        ]);

        \App\Author::create([
            'name'=>'Miguel Esteves Cardoso',
            'description'=>'Colunista do Público.',
            'email'=>'opiniao@publico.pt',
            'job_id'=>15
        ]);

    }
}
