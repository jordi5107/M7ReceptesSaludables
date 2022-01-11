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

            ['name' => "Politica", "description" => "Noticies sobre politica", "image"=>"https://thumbs.dreamstime.com/b/los-pol%C3%ADticos-que-participan-en-el-discusi%C3%B3n-pol%C3%ADtico-115420384.jpg", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "Tecnologia", "description" => "Noticies sobre tecnologia", "image"=>"https://images.ctfassets.net/hrltx12pl8hq/4ACnMj4WVSOZRZt0jHu9h5/1506f652bcd70f4dc3e88219fefea858/shutterstock_739595833-min.jpg?fit=fill&w=800&h=300", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "Successos", "description" => "Noticies sobre successos", "image"=>"https://media.istockphoto.com/photos/free-stage-with-lights-picture-id1222776839?k=20&m=1222776839&s=612x612&w=0&h=xwsAmz_orgrN7bzZHlNma23KY9bZSk5A2od_mI2xawU=", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Category::insert($categories);
    }
}
