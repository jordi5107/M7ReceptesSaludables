<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use Carbon\Carbon;


class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $team = [

            ["user_id"=> 1, 'name' => "Admin", "personal_team"=>"1", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],
            ["user_id"=> 2, 'name' => "Users","personal_team"=>"0", "created_at"=>$current_date_time, "updated_at"=>$current_date_time],

        ];

        Team::insert($team);
    }
}
