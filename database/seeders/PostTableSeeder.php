<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
            'user_id' => 1,
            'image_path' => '1533394961pexels-photo-699558.jpeg',
            'body' => 'سوف ننطلق إلى التخييم في الإجازة، سنذهب أنا وأصدقائي في الجامعة إلى الغابات ونقوم بحفلة شواء هناك، وسنستمتع بلعب كرة القدم، بالإضافة إلى العديد من النشاطات المميزة، من سيكون معنا في هذه الرحلة؟ عليكم فقط تسجيل أسمائكم',
            'created_at' => '2018-08-01 15:02:41'
            ],
            [
            'user_id' => 1,
            'image_path' => '1533394406pexels-photo-262524.jpeg',
            'body' => 'سيقام غداً لعبة كرة قدم عند الساعة 10:00 صباحاً في ملعب الجامعة، فريقنا متحمس جداً للعب :D',
            'created_at' => '2018-05-04 13:44:32'
            ],
            [
            'user_id' => 1,
            'image_path' => '1533395094summer-office-student-work.jpg',
            'body' => 'صورة لي أثناء العمل، التقطها صديق لي اليوم',
            'created_at' => '2017-09-14 2:44:06'
            ],
            [
            'user_id' => 1,
            'image_path' => '1533395053salmon-dish-food-meal-46239.jpeg',
            'body' => 'وجبة غداء لذيذة ومميزة في مطعم المأكولات البحرية الموجود على الساحل، سنعيد هذه التجربة في الأيام القادمة، فور الانتهاء من الامتحانات',
            'created_at' => '2017-08-06 11:30:02'
            ],
        ]);
    }
}
