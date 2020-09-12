<?php

namespace Database\Seeders;

use App\Models\Advantage;
use App\Models\Message;
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
        $this->call(ClientSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(SubscriberSeeder::class);
        $this->call(TeacherSeeder::class);
    }
}
