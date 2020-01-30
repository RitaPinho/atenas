<?php

use Illuminate\Database\Seeder;

class NewsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\News::create([
            'title'=>'Bem-vindos anos 20',
            'image'=>'images/news/anos20.jpg',
            'url'=>'https://www.publico.pt/2019/12/30/culturaipsilon/opiniao/bemvindos-anos-20-1898758',
            'subtitle'=>'Quanto tempo faltará para alguém chamar à nova década “os novos anos 20”? Dois dias? Ou a década de Billie Eilish?',
            'news_size_id'=>2,
            'category_id'=>10
        ]);

        \App\News::create([
            'title'=>'A viragem consumou-se: motor a gasolina pôs fim ao reinado diesel',
            'image'=>'images/news/diesel.jpg',
            'url'=>'https://www.publico.pt/2020/01/02/economia/noticia/viragem-consumouse-motor-gasolina-pos-fim-reinado-dieseli-1899048',
            'subtitle'=>'Motor a gasóleo liderava há 15 anos. Agora, mais portugueses preferem carros a gasolina. Eléctricos puros cresceram 2,7%. Tesla tem quota de 27,8%.',
            'news_size_id'=>3,
            'category_id'=>4
        ]);

        \App\News::create([
            'title'=>'Nos votos de Ano Novo, a justiça levou a Belém uma “sexta-feira da Paixão”',
            'image'=>'images/news/anonovo.jpg',
            'url'=>'https://www.publico.pt/2020/01/02/politica/noticia/votos-ano-novo-justica-levou-belem-sextafeira-paixao-1899076',
            'subtitle'=>'Presidentes dos tribunais supremos, procuradora-geral da República e provedora de justiça tiveram, pela primeira vez, oportunidade de falar publicamente na Presidência da República. ',
            'news_size_id'=>3,
            'category_id'=>1
        ]);

        \App\News::create([
            'title'=>'Australianos fogem das chamas incontroláveis, à espera de mais um dia de inferno',
            'image'=>'images/news/australia.jpg',
            'url'=>'https://www.publico.pt/2020/01/02/mundo/noticia/australianos-fogem-chamas-incontrolaveis-espera-dia-inferno-1899066',
            'subtitle'=>'As autoridades estão a ordenar a retirada de milhares de pessoas da costa Sul do país, antecipando um dia potencialmente catastrófico para Sábado. ',
            'news_size_id'=>3,
            'category_id'=>5
        ]);

        \App\News::create([
            'title'=>'Luxemburgo testa sistema de transportes públicos grátis na passagem de ano',
            'image'=>'images/news/luxemburgo.jpg',
            'url'=>'https://www.publico.pt/2019/12/30/mundo/noticia/luxemburgo-testa-sistema-transportes-publicos-gratis-passagem-ano-1898795',
            'subtitle'=>'Transportes totalmente gratuitos vão entrar em vigor em Março. ',
            'news_size_id'=>2,
            'category_id'=>5
        ]);
    }
}
