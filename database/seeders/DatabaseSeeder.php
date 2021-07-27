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
    //Writer::factory(5)->create();
    //Text::factory(10)->create();
    //Illustrator::factory(5)->create();
    //Illustration::factory(5)->create();
    User::factory()->create([
      'name' => 'writer1',
      'nickname' => 'writer1',
      'email' => 'writer1@gmail.com',
      'isWriter' => true
    ]);

    User::factory()->create([
      'name' => 'writer2',
      'nickname' => 'writer2',
      'email' => 'writer2@gmail.com',
      'isWriter' => true
    ]);

    User::factory()->create([
      'name' => 'writer3',
      'nickname' => 'writer3',
      'email' => 'writer3@gmail.com',
      'isWriter' => true
    ]);

    User::factory()->create([
      'name' => 'writer4',
      'nickname' => 'writer4',
      'email' => 'writer4@gmail.com',
      'isWriter' => true
    ]);

    User::factory()->create([
      'name' => 'writer5',
      'nickname' => 'writer5',
      'email' => 'writer5@gmail.com',
      'isWriter' => true
    ]);

    User::factory()->create([
      'name' => 'illustrator1',
      'nickname' => 'illustrator1',
      'email' => 'illustrator1@gmail.com',
      'isWriter' => false
    ]);

    User::factory()->create([
      'name' => 'illustrator2',
      'nickname' => 'illustrator2',
      'email' => 'illustrator2@gmail.com',
      'isWriter' => false
    ]);

    User::factory()->create([
      'name' => 'illustrator3',
      'nickname' => 'illustrator3',
      'email' => 'illustrator3@gmail.com',
      'isWriter' => false
    ]);

    User::factory()->create([
      'name' => 'illustrator4',
      'nickname' => 'illustrator4',
      'email' => 'illustrator4@gmail.com',
      'isWriter' => false
    ]);

    User::factory()->create([
      'name' => 'illustrator5',
      'nickname' => 'illustrator5',
      'email' => 'illustrator5@gmail.com',
      'isWriter' => false
    ]);

    Writer::factory()->create([
      'user_id' => 1,
      'personaldescription' => 'writer1 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Eo_circle_red_number-1.svg'
    ]);

    Writer::factory()->create([
      'user_id' => 2,
      'personaldescription' => 'writer2 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/8/8f/Eo_circle_red_number-2.svg'
    ]);

    Writer::factory()->create([
      'user_id' => 3,
      'personaldescription' => 'writer3 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Eo_circle_red_number-3.svg'
    ]);

    Writer::factory()->create([
      'user_id' => 4,
      'personaldescription' => 'writer4 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Eo_circle_red_number-4.svg'
    ]);

    Writer::factory()->create([
      'user_id' => 5,
      'personaldescription' => 'writer5 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/6/68/Eo_circle_red_number-5.svg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 6,
      'personaldescription' => 'Illustrator1 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Eo_circle_blue_number-1.svg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 7,
      'personaldescription' => 'Illustrator2 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/5/53/Eo_circle_blue_number-2.svg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 8,
      'personaldescription' => 'Illustrator3 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Eo_circle_blue_number-3.svg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 9,
      'personaldescription' => 'Illustrator4 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Eo_circle_blue_number-4.svg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 10,
      'personaldescription' => 'Illustrator5 description',
      'personalImage' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Eo_circle_blue_number-5.svg'
    ]);

    Text::factory()->create([
      'genre' => 'genre',
      'title' => 'writer1 text',
      'description' => 'This is an artwork made by writer1',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 1,
    ]);

    Text::factory()->create([
      'genre' => 'genre',
      'title' => 'writer2 text',
      'description' => 'This is an artwork made by writer2',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 2,
    ]);

    Text::factory()->create([
      'genre' => 'genre',
      'title' => 'writer3 text',
      'description' => 'This is an artwork made by writer3',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 3,
    ]);

    Text::factory()->create([
      'genre' => 'genre',
      'title' => 'writer4 text',
      'description' => 'This is an artwork made by writer4',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 4,
    ]);

    Text::factory()->create([
      'genre' => 'genre',
      'title' => 'writer5 text',
      'description' => 'This is an artwork made by writer5',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 5,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator1 art',
      'description' => 'This is an artwork made by illustrator1',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 6,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator2 art',
      'description' => 'This is an artwork made by illustrator2',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 7,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator3 art',
      'description' => 'This is an artwork made by illustrator3',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 8,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator4 art',
      'description' => 'This is an artwork made by illustrator4',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 9,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator5 art',
      'description' => 'This is an artwork made by illustrator5',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 10,
    ]);
  }
}