<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();
        $comments = [

            ['comment' => "M'agrada", "recipe_id" => "1", "user_id"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['comment' => "M'agrada", "recipe_id" => "2", "user_id"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['comment' => "M'agrada", "recipe_id" => "3", "user_id"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Comment::insert($comments);
    }
}
