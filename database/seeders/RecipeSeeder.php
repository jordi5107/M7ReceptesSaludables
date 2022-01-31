<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use Carbon\Carbon;

class RecipeSeeder extends Seeder
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

            ['title' => "Truita de patates", "description" => "La tradicional receta de tortilla de patatas o tortilla española, un plato básico de la cocina española a base de patatas, huevo y cebolla.Este es una de las recetas más sencillas y más conocidas de la cocina española, siendo un plato perfecto para la cena, como pintxo o picoteo y también para bocadillos y meriendas.", "image"=>"null", "prepTime"=>"00:30:11", "ingredients"=> "ous,patates,ceba,oli", "category_id"=> 1, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['title' => "Macarrons", "description" => "Els macarrons de l'avia", "image"=>"null", "prepTime"=>"00:30:11", "ingredients"=> "macarrons,tomaca,ceba,oli", "category_id"=> 2, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['title' => "Pollastre", "description" => "Pollastre a la salsa", "image"=>"null", "prepTime"=>"00:30:11", "ingredients"=> "pollsatre,patates,ceba,pastanaga", "category_id"=> 2, "author_id" => 1, "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Recipe::insert($posts);
       
    }
}
