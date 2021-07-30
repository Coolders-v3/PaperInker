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
      'personalImage' => 'https://photos.wi.gcs.trstatic.net/91eH0cy_sdL4W9ERlE17iRoLQPuAKU_MeZ8jBHNimvD54guAPjDBZaU7zR0ZsvMHE79qA8I7vEHGE5H5HGRJHA'
    ]);

    Writer::factory()->create([
      'user_id' => 2,
      'personaldescription' => 'writer2 description',
      'personalImage' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5o2rTfE4y_Gle_Wyb7DV4cQ_vetOs3FhZa5SR7SRZ7y9qeTlimyB_D6n9uA3DPrwI1B8&usqp=CAU'
    ]);

    Writer::factory()->create([
      'user_id' => 3,
      'personaldescription' => 'writer3 description',
      'personalImage' => 'https://cultivatedculture.com/wp-content/uploads/2019/12/LinkedIn-Profile-Picture-Example-Madeline-Mann.jpeg'
    ]);

    Writer::factory()->create([
      'user_id' => 4,
      'personaldescription' => 'writer4 description',
      'personalImage' => 'https://cdn-images.resumelab.com/authors/tom_gerencer_resumelab.jpg'
    ]);

    Writer::factory()->create([
      'user_id' => 5,
      'personaldescription' => 'writer5 description',
      'personalImage' => 'https://attractivepartners.co.uk/wp-content/uploads/2017/06/profile.jpg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 6,
      'personaldescription' => 'Illustrator1 description',
      'personalImage' => 'https://www.webconsultas.com/sites/default/files/styles/foto_autor_pagina/public/autores/vanessa-fernandez.jpg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 7,
      'personaldescription' => 'Illustrator2 description',
      'personalImage' => 'https://ta.azureedge.net/p/images/usuarios/l/quLMaJag1UjjmV-B3nt_QLGoPy2z5QL30.jpg/600x600cut/'
    ]);

    Illustrator::factory()->create([
      'user_id' => 8,
      'personaldescription' => 'Illustrator3 description',
      'personalImage' => 'https://www.inboundcycle.com/hubfs/ClaraAlvarez.jpg'
    ]);

    Illustrator::factory()->create([
      'user_id' => 9,
      'personaldescription' => 'Illustrator4 description',
      'personalImage' => 'https://media-exp1.licdn.com/dms/image/C4E12AQGwSz8oNzs_lg/article-inline_image-shrink_1000_1488/0/1534478573026?e=1632960000&v=beta&t=IIiKJiKjkHRhksZjQ5VH07gUMSJzRXnTTs4_X5yHDlY'
    ]);

    Illustrator::factory()->create([
      'user_id' => 10,
      'personaldescription' => 'Illustrator5 description',
      'personalImage' => 'https://cultivatedculture.com/wp-content/uploads/2019/12/LinkedIn-Profile-Picture-Example-Sami-Viitama%CC%88ki-.jpeg'
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
      'description' => 'https://lisbonparismadrid.files.wordpress.com/2021/03/leer-entre-imagenes_mockup_20.jpg?w=1024',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 6,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator2 art',
      'description' => 'https://artworkcollective.com.au/wp-content/uploads/2018/09/Dream-Pink-Michele-Hall.jpg',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 7,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator3 art',
      'description' => 'https://www.etapainfantil.com/wp-content/uploads/2021/05/Dibujos-Kawaii-800x491.jpg',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 8,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator4 art',
      'description' => 'https://www.canvasprintsaustralia.net.au/wp-content/uploads/2015/12/THE-BRIDGES-OF-AMSTERDAM-copy.jpg',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 9,
    ]);

    Illustration::factory()->create([
      'genre' => 'genre',
      'title' => 'illustrator5 art',
      'description' => 'https://lh3.googleusercontent.com/proxy/WlZyzLAaFHnR2IKsqGvzfQ42Sxdkxel1UmDwOiH7jsBmIH1rn3mrqiBBkKPpvgCUK6PskeBfYfHHeckuHn6mPHxuUnskG6N28DdZ-CknFmgidqlqe0F0rMxR7GleIOM',
      'year' => '2020',
      'favorite' => true,
      'user_id' => 10,
    ]);
  }
}