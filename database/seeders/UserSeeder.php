<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $users = [
            //Passoword admin 2021
            ['name' => "Admin", "email" => "admin@gmail.es", "password"=> '$2y$10$MN1a4V9hNe.f1QTbmkIHq.YwFx8dvRvGUDu.sUt45VhHYkN9XEWI2', "current_team_id"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "User", "email" => "user@gmail.es", "password"=> '$2y$10$MN1a4V9hNe.f1QTbmkIHq.YwFx8dvRvGUDu.sUt45VhHYkN9XEWI2', "current_team_id"=>"2", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ['name' => "Test", "email" => "test@gmail.es", "password"=> '$2y$10$MN1a4V9hNe.f1QTbmkIHq.YwFx8dvRvGUDu.sUt45VhHYkN9XEWI2', "current_team_id"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        User::insert($users);
    }
}
// name', 'email', 'password'