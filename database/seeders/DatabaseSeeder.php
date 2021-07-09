<?php

namespace Database\Seeders;

use App\Models\Illustrator;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Writer::factory(5)->create();
        Illustrator::factory(5)->create();
    }
}
