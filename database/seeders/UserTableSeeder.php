<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'name' => 'omar',
            'email' => 'omar@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$Gopnny7j8PAvXqup/lEHDObtCOtsRV1eirNouQbN866HHO2CBmnLa',
            'first_name' => 'عمر',
            'last_name' => 'محمد',
            'birth_date' => '1997-12-18',
            'avatar' => '1533749758pexels-photo-91227.jpeg',
            ],
            [
            'name' => 'mhd_luay',
            'email' => 'mhd.luay@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$1Pq2nXiqseANMbL6vWv5yO9maab81OpWPOXv.W9NfW4/KRZl/4hKW',
            'first_name' => 'محمد',
            'last_name' => 'لؤي',
            'birth_date' => '1993-9-18',
            'avatar' => '1533749827pexels-photo-462680.jpeg',
            ],
            [
            'name' => 'Mhd_alahasan',
            'email' => 'mhd.alhasan@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$i165ivnPA8wDLH7lGOrHwucGkbNXurRLzBPk/vUHgO9o/tpBsY58S',
            'first_name' => 'محمد',
            'last_name' => 'الحسن',
            'birth_date' => '1992-2-3',
            'avatar' => '1533749475pexels-photo-846741.jpeg',
            ],
            [
            'name' => 'khaled',
            'email' => 'khaled@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$Gopnny7j8PAvXqup/lEHDObtCOtsRV1eirNouQbN866HHO2CBmnLa',
            'first_name' => 'خالد',
            'last_name' => 'السعيد',
            'birth_date' => '1990-12-18',
            'avatar' => '1533750469pexels-photo-213117.jpeg',
            ],
            [
            'name' => 'ayham',
            'email' => 'ayham@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$Gopnny7j8PAvXqup/lEHDObtCOtsRV1eirNouQbN866HHO2CBmnLa',
            'first_name' => 'أيهم',
            'last_name' => 'حامد',
            'birth_date' => '1995-2-9',
            'avatar' => '1533749709pexels-photo-450271.jpeg',
            ],
            [
            'name' => 'amer',
            'email' => 'amer@hsoub.com',
            // Password is : 123456789
            'password' => '$2y$10$Gopnny7j8PAvXqup/lEHDObtCOtsRV1eirNouQbN866HHO2CBmnLa',
            'first_name' => 'عامر',
            'last_name' => 'الأحمد',
            'birth_date' => '1991-11-6',
            'avatar' => '1533749588pexels-photo-736716.jpeg',
            ],
        ]);
    }
}
