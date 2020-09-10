<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while(Message::count() < 10) {
            Message::factory()
                ->times(1)
                ->create();
        }
    }
}
