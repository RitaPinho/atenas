<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Job::create([
           'job'=>'Jornalista',
        ]);

        \App\Job::create([
           'job'=>'Fotojornalista',
        ]);

        \App\Job::create([
            'job'=>'Geógrafo',
        ]);

        \App\Job::create([
            'job'=>'Editor de Política',
        ]);

        \App\Job::create([
            'job'=>'Diretor-Adjunto',
        ]);

        \App\Job::create([
            'job'=>'Diretor de Local',
        ]);

        \App\Job::create([
            'job'=>'Editor de Mundo',
        ]);

        \App\Job::create([
            'job'=>'Estagiária',
        ]);

        \App\Job::create([
            'job'=>'Diretora-Adjunta',
        ]);

        \App\Job::create([
            'job'=>'Jornalísta Estagiário',
        ]);

        \App\Job::create([
            'job'=>'Web Designer',
        ]);

        \App\Job::create([
            'job'=>'Economista',
        ]);

        \App\Job::create([
            'job'=>'Sociólogo',
        ]);

        \App\Job::create([
            'job'=>'Presidente do Instituto Superior Técnico',
        ]);

        \App\Job::create([
            'job'=>'Colunista',
        ]);

        \App\Job::create([
            'job'=>'Copy Editor',
        ]);

        \App\Job::create([
            'job'=>'Redatora Principal',
        ]);

        \App\Job::create([
            'job'=>'Sub-Editora do Mundo',
        ]);

        \App\Job::create([
            'job'=>'Infografia',
        ]);

        \App\Job::create([
            'job'=>'Designer Digital',
        ]);
    }
}
