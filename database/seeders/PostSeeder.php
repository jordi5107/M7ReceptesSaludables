<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $posts = [

            ['title' => "L'estat aprova els presupostos", "content" => "L’estat ahir va aprovar els pressupostos generals gràcies a l’acord entre les diverses forces polítiques de la cambra del senat, aquest acord significa l'aprovació d'uns pressupostos que desencallen una llarga negociació que ja feia dos mesos que estava encallada.", "image"=>"https://www.diariodesevilla.es/2020/12/03/economia/Hacienda-Montero-Congreso-Presupuestos-Generales_1525357776_128907928_667x375.jpg", "category_id"=> 1, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['title' => "Invent revolucionari neteja aigues no potables", "content" => "Una de les problemàtiques més fonamentals dels països subdesenvolupats és l'abastament d'aigua neta per als seus habitants ja que un gran percentatge de la població no té accés a un sistema d'aqüeducte a casa, per la qual cosa han de buscar abastir-se d'una font que no sempre és segura. Si bé aquesta realitat pot semblar summament llunyana, existeix; i ha de ser abordada de manera urgent en la cerca per resoldre una necessitat bàsica com ho és laccés a laigua potable.Per aquesta raó, el desenvolupament d'un invent innovador que filtra l'aigua de llacs i rius filtrant-la, per transformar-la en aigua potable a l'instant, és tan bona notícia i mereix ser compartida.Ens referim llavors al dispositiu conegut com LifeStraw, un simple aparell que neteja l'aigua filtrant tot tipus de bacteris i contaminants que s'hi puguin trobar de manera instantània.", "image"=>"https://culturafilosofica.com/wp-content/uploads/2021/02/20080523_lifestraw_boys_23-1210x642.jpg", "category_id"=> 2, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['title' => "Accident a barcelona", "content" => "El 26 d'octubre passat un jove de 25 anys va resultar greument ferit després de ser atropellat per un cotxe al carrer Diputació de Barcelona. L'home va ser traslladat en estat crític fins a un hospital de la ciutat, segons va comunicar el Servei d'Emergències Mèdiques (SEM). Dues setmanes després de l'accident, Betevé ha assenyalat que el conductor del turisme es va saltar el semàfor en vermell i no va frenar abans d'impactar contra el vianant. Segons l'atestat policial de la Guàrdia Urbana, el turisme circulava a una velocitat entre 30 i 60 quilòmetres per hora i no va fer cap maniobra per esquivar el vianant; tampoc va frenar.", "image"=>"https://www.metropoliabierta.com/uploads/s1/16/83/16/7/atropellat_9_1200x480.jpeg", "category_id"=> 3, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Post::insert($posts);
       
    }
}
