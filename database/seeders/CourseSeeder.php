<?php

namespace Database\Seeders;

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
        while(Course::count() < 8) {
            Course::factory()
                ->times(1)
                ->create();
        }
    }
}
