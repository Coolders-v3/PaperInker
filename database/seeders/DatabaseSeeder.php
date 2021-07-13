<?php

namespace Database\Seeders;

use App\Models\Illustration;
use App\Models\Illustrator;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use App\Models\User;
use App\Models\Text;

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
        Text::factory(5)->create();
        Illustrator::factory(5)->create();
        Illustration::factory(5)->create();
        User::factory()->create(['email'=>'usuario@gmail.com']);
    }
}
