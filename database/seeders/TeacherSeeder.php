<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while(Teacher::count() < 3) {
            Teacher::factory()
                ->times(1)
                ->create();
        }
    }
}
