<?php
namespace  Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $omar_id = User::where('name', 'omar')->first()->id;
        $users = User::where("id","!=",$omar_id)->get();

        $j=1;
        foreach ($users as $row) {
            # code...
            DB::table('followers')->insert([
                [
                'to_user_id' => $row['id'],
                'from_user_id' => $omar_id,
                'accepted'=> 1,
                'created_at' => '2018-08-01 15:02:41',
                ]
            ]);
            
            for ($i=0; $i < 3; $i++) { 
                # code...
                $temp = $i+$j;
                if($temp < 12 )
                DB::table('posts')->insert([
                    [
                    'user_id' => $row['id'],
                    'image_path' => 'post_'.$temp.'.jpeg',
                    'body' => 'تجربة إضافة منشور على شبكة انستغرام حسوب',
                    'created_at' => '2018-08-01 15:02:41'
                    ]
                ]);
            }
            $j+=3;
        }

        $posts = Post::get();
        $users = User::get();
        foreach ($posts as $row) {
            # code...
            $max = rand(0,sizeof($users)-1);
            for ($i=0; $i < $max; $i++) { 
                # code...
                DB::table('likes')->insert([
                    [
                    'post_id' => $row['id'],
                    'user_id' => $users[$i]->id,
                    'created_at' => '2018-08-01 15:02:41'
                    ]
                ]);
            }
        }

    }
}