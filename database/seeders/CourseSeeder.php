<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            Course::create([
                'id' => $item,
                'name' => 'Course $i', 
                'modules_id' => rand(1, 30),
                'user_id' => rand(1, 30),
                'availableSpots' => rand(5, 100),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
      
        // Course::create([
        //     'id' => 1,
        //     'name' => 'Computing',
        //     'modules' => 'Animation, Cryptography, Algorithms',
        //     'availableSpots' => '66',
        //     'user_id' => 1
        // ]);

        // Course::create([
        //     'id' => 2,
        //     'name' => 'Math', 
        //     'modules' => 'Algebra, Geometry, Trigonometry',
        //     'availableSpots' => '40',
        //     'user_id' => 1
        // ]);

        // Course::create([
        //     'id' => 2,
        //     'name' => 'Science', 
        //     'modules' => 'Biology, Chemistry',
        //     'availableSpots' => '40',
        //     'user_id' => 1
        // ]);
    }
}
