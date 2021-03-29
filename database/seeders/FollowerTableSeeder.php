<?php

namespace Database\Seeders;

use App\Models\Follower;
use Illuminate\Database\Seeder;


class FollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Follower::factory()->count(4)->create();
    }
}