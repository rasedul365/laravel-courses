<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Topic;
use App\Models\Author;
use App\Models\Course;
use App\Models\Review;
use App\Models\Series;
use App\Models\Platform;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'rased@admin.me',
            'password' => bcrypt('password'),
            'type' => 1,
        ]);


        $series = [
            [
                'name'=>'Laravel',
                'image' => 'https://logos-download.com/wp-content/uploads/2016/09/Laravel_logo_wordmark_logotype-700x173.png'
            ],
            [
                'name'=>'PHP',
                'image' => 'https://toppng.com/uploads/preview/php-logo-filled-png-115360039248bye41xqdx.png'
            ],
            [
                'name'=>'Vue js',
                'image' => 'https://masteringjs.io/assets/images/vue/vue-spelled-out.png'
            ],
            [
            'name'=>'React js',
            'image' => 'https://logos-download.com/wp-content/uploads/2016/09/React_logo_wordmark-700x235.png'
            ],
            [
            'name'=>'Javascript',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/JavaScript_logo.svg/786px-JavaScript_logo.svg.png'
            ],
            [
                'name'=>'Symfony',
                'image' => 'https://symfony.com/logos/symfony_black_02.png'
            ]
        ];

        foreach ($series as $item){
            Series::create([
                'name'=>$item['name'],
                'image' =>$item['image'],
            ]);
        }


	    $topics = ['Eloquent', 'Validation', 'Authentication', 'Testing', 'Refactoring'];
        foreach($topics as $item){

            $slug = strtolower(str_replace(' ', '_', $item));

            Topic::create([
                'name'=> $item,
                'slug'=> $slug,
            ]);

        }

        $platforms = ['Laracasts', 'Youtube', 'Larajobs', 'Laravel News', 'Laracasts Forum'];
        foreach($platforms as $item){
            Platform::create([
                'name'=> $item,
            ]);
        }

        Author::factory(10)->create();



        User::factory(50)->create();


        Course::factory(100)->create();

        $courses = Course::all();

        foreach($courses as $course){
            $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series = Series::all()->random(rand(1, 4))->pluck('id')->toArray();
            $course->series()->attach($series);
        }

        Review::factory(100)->create();
    }
}
