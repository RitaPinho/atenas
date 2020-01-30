<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Category::create([
            'category' =>'Política',
            'image'=>'images/categories/politica.jpg'
        ]);

        \App\Category::create([
            'category' =>'Sociedade',
            'image'=>'images/categories/sociedade.jpg'
        ]);

        \App\Category::create([
            'category' =>'Local',
            'image'=>'images/categories/local.jpg'
        ]);

        \App\Category::create([
            'category' =>'Economia',
            'image'=>'economia.jpg'
        ]);

        \App\Category::create([
            'category' =>'Mundo',
            'image'=>'mundo.jpg'
        ]);

        \App\Category::create([
            'category' =>'Cultura',
            'image'=>'cultura.jpg'
        ]);

        \App\Category::create([
            'category' =>'Desporto',
            'image'=>'desporto.jpg'
        ]);

        \App\Category::create([
            'category' =>'Ciência',
            'image'=>'ciência.jpg'
        ]);

        \App\Category::create([
            'category' =>'Tecnologia',
            'image'=>'tecnologia.jpg'
        ]);

        \App\Category::create([
            'category' =>'Opinião',
            'image'=>'opiniao.jpg'
        ]);

        \App\Category::create([
            'category' =>'PGlobal',
            'image'=>'pglobal.jpg'
        ]);

        \App\Category::create([
            'category' =>'Editoriais',
            'image'=>'editoriais.jpg'
        ]);

        \App\Category::create([
            'category' =>'Bartoon',
            'image'=>'bartoon.jpg'
        ]);

        \App\Category::create([
            'category' =>'Ensaio',
            'image'=>'ensaio.jpg'
        ]);

        \App\Category::create([
            'category' =>'Bem-Estar',
            'image'=>'bemestar.jpg'
        ]);

        \App\Category::create([
            'category' =>'Alimentação',
            'image'=>'alimentacao.jpg'
        ]);

        \App\Category::create([
            'category' =>'Relações',
            'image'=>'relacoes.jpg'
        ]);

        \App\Category::create([
            'category' =>'Moda',
            'image'=>'moda.jpg'
        ]);

        \App\Category::create([
            'category' =>'Beleza',
            'image'=>'beleza.jpg'
        ]);

        \App\Category::create([
            'category' =>'Casa',
            'image'=>'casa.jpg'
        ]);

        \App\Category::create([
            'category' =>'Pessoas',
            'image'=>'pessoas.jpg'
        ]);

        \App\Category::create([
            'category' =>'Viagens',
            'image'=>'viagens.jpg'
        ]);

        \App\Category::create([
            'category' =>'Passeios',
            'image'=>'passeios.jpg'
        ]);

        \App\Category::create([
            'category' =>'Hóteis',
            'image'=>'hoteis.jpg'
        ]);

        \App\Category::create([
            'category' =>'Gastronomia',
            'image'=>'gastronomia.jpg'
        ]);

        \App\Category::create([
            'category' =>'Bares',
            'image'=>'bares.jpg'
        ]);

        \App\Category::create([
            'category' =>'Protagonista',
            'image'=>'protagonista.jpg'
        ]);

        \App\Category::create([
            'category' =>'Atualidade',
            'image'=>'atualidade.jpg'
        ]);

        \App\Category::create([
            'category' =>'Vícios',
            'image'=>'vicios.jpg'
        ]);

        \App\Category::create([
            'category' =>'Multimédia',
            'image'=>'multimedia.jpg'
        ]);

        \App\Category::create([
            'category' =>'Causas',
            'image'=>'causas.jpg'
        ]);

        \App\Category::create([
            'category' =>'Megafone',
            'image'=>'megafone.jpg'
        ]);

        \App\Category::create([
            'category' =>'Pet',
            'image'=>'pet.jpg'
        ]);

        \App\Category::create([
            'category' =>'Estreias',
            'image'=>'estreias.jpg'
        ]);

        \App\Category::create([
            'category' =>'Trailers',
            'image'=>'trailers.jpg'
        ]);

        \App\Category::create([
            'category' =>'Em-Breve',
            'image'=>'embreve.jpg'
        ]);

        \App\Category::create([
            'category' =>'Críticas',
            'image'=>'criticas.jpg'
        ]);

        \App\Category::create([
            'category' =>'Notícias',
            'image'=>'noticias.jpg'
        ]);

        \App\Category::create([
            'category' =>'Passatempo',
            'image'=>'passatempo.jpg'
        ]);
    }
}
