<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'development@gmail.com',
            'password' => Hash::make('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'student1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'student2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'student3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 2,
        ]);

        DB::table('periods')->insert([
            'year' => 2020,
            'semester' => 1,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,

        ]);
        DB::table('periods')->insert([
            'year' => 2020,
            'semester' => 0,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,
        ]);
        DB::table('periods')->insert([
            'year' => 2021,
            'semester' => 1,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,
        ]);
        DB::table('periods')->insert([
            'year' => 2021,
            'semester' => 0,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,
        ]);
        DB::table('periods')->insert([
            'year' => 2022,
            'semester' => 1,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,
        ]);
        DB::table('periods')->insert([
            'year' => 2022,
            'semester' => 0,
            'start_date_vote' => 1667840509,
            'end_date_vote' => 1667840509,
            'start_date_submission' => 1667840509,
            'end_date_submission' => 1667840509,
        ]);

        DB::table('categories')->insert([
            'name' => "fun",
        ]);
        DB::table('categories')->insert([
            'name' => "powerful",
        ]);
        DB::table('categories')->insert([
            'name' => "luxury",
        ]);
        DB::table('categories')->insert([
            'name' => "modern",
        ]);
        DB::table('categories')->insert([
            'name' => "ideas",
        ]);
        DB::table('categories')->insert([
            'name' => "iot",
        ]);

        DB::table('team_categories')->insert([
            'id_team' => 1,
            'id_category' => 1,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 1,
            'id_category' => 2,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 1,
            'id_category' => 3,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 2,
            'id_category' => 3,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 2,
            'id_category' => 4,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 3,
            'id_category' => 3,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 3,
            'id_category' => 4,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 3,
            'id_category' => 2,
        ]);
        DB::table('team_categories')->insert([
            'id_team' => 3,
            'id_category' => 6,
        ]);

        DB::table('teams')->insert([
            'id_period' => 1,
            'id_user' => 1,
            'name' => 'Study Wars',
            'nrp_leader' => 'qwe123456',
            'member' => '- handy',
            'slug' => 'handy'
        ]);
        DB::table('teams')->insert([
            'id_period' => 1,
            'id_user' => 2,
            'name' => 'Thunders Gods',
            'nrp_leader' => "asd123456",
            'member' => '- budio',
            'slug' => 'budio'
        ]);
        DB::table('teams')->insert([
            'id_period' => 1,
            'id_user' => 3,
            'name' => 'United Army',
            'nrp_leader' => 'zxc123456',
            'member' => '- ratu',
            'slug' => 'ratu'
        ]);

        DB::table('news')->insert([
            'id_user' => 1,
            'content' => 'They did nothing as the raccoon attacked the lady’s bag of food.',
        ]);
        DB::table('news')->insert([
            'id_user' => 1,
            'content' => 'Kevin embraced his ability to be at the wrong place at the wrong time.',
        ]);


    }
}
