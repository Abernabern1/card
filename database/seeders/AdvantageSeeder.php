<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        while(Advantage::count() < 6) {
            Advantage::factory()
                ->times(1)
                ->create();
        }
    }
}
