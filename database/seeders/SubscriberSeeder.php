<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while(Subscriber::count() < 10) {
            Subscriber::factory()
                ->times(1)
                ->create();
        }
    }
}
