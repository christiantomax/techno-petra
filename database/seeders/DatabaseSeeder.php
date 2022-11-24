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
            'member' => '{"ops":[{"insert":"asdf\n"}]}',
            'description' => '{"ops":[{"insert":"asdf\n"}]}',
            'slug' => 'handy'
        ]);
        DB::table('teams')->insert([
            'id_period' => 1,
            'id_user' => 2,
            'name' => 'Thunders Gods',
            'nrp_leader' => "asd123456",
            'member' => '{"ops":[{"insert":"asdf\n"}]}',
            'description' => '{"ops":[{"insert":"asdf\n"}]}',
            'slug' => 'budio'
        ]);
        DB::table('teams')->insert([
            'id_period' => 1,
            'id_user' => 3,
            'name' => 'United Army',
            'nrp_leader' => 'zxc123456',
            'member' => '{"ops":[{"insert":"asdf\n"}]}',
            'description' => '{"ops":[{"insert":"asdf\n"}]}',
            'slug' => 'ratu'
        ]);

        DB::table('news')->insert([
            'title' => 'title example 1',
            'news_for' => 1,
            'content' => '{"ops":[{"insert":"This is a heading text..."},{"attributes":{"header":1},"insert":"\n"},{"insert":"\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper.\n\nCurabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula at ante tempor posuere a at lorem.\n\nAliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante.\n"}]}',
            'start_date' => 1667840509,
            'end_date' => 1667840509,
        ]);
        DB::table('news')->insert([
            'title' => 'title example 2',
            'news_for' => 2,
            'content' => '{"ops":[{"insert":"This is a heading text..."},{"attributes":{"header":1},"insert":"\n"},{"insert":"\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper.\n\nCurabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula at ante tempor posuere a at lorem.\n\nAliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante.\n"}]}',
            'start_date' => 1667840509,
            'end_date' => 1667840509,
        ]);
        DB::table('news')->insert([
            'title' => 'title example 3',
            'news_for' => 3,
            'content' => '{"ops":[{"insert":"This is a heading text..."},{"attributes":{"header":1},"insert":"\n"},{"insert":"\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper.\n\nCurabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula at ante tempor posuere a at lorem.\n\nAliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante.\n"}]}',
            'start_date' => 1667840509,
            'end_date' => 1667840509,
        ]);

        DB::table('team_require_documents')->insert([
            'name' => 'Link Youtube',
            'type' => 'text',
            'sort' => 1,
        ]);
        DB::table('team_require_documents')->insert([
            'name' => 'Project thumbnail',
            'type' => 'file',
            'ext' => '["png","jpg","jpeg"]',
            'sort' => 2,
        ]);
        DB::table('team_require_documents')->insert([
            'name' => 'Proposal (pdf)',
            'type' => 'file',
            'ext' => '["pdf"]',
            'sort' => 3,
        ]);
        DB::table('team_require_documents')->insert([
            'name' => 'Project preview',
            'type' => 'file',
            'ext' => '["png","jpg","jpeg"]',
            'sort' => 4,
        ]);
    }
}
