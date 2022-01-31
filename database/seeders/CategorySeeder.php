<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();
        $categories = [

            ['name' => "Plats", "description" => "Plats amb el millor gust", "image"=>"https://ep00.epimg.net/elcomidista/imagenes/2017/03/15/receta/1489602058_631150_1490079875_media_normal.jpg", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "Postres", "description" => "Postres dolços", "image"=>"https://images.aws.nestle.recipes/resized/2CE16976-811C-6377-B9D8-FF0000673B69-490x252-b-min_1200_600.png", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "Entrants", "description" => "Algo per picar?", "image"=>"https://www.cocinatis.com/media/photologue/photos/entrantes-navidad-huevos-rebozados.jpg", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Category::insert($categories);
    }
}
