<?php

namespace Tests\Feature;

use App\Models\Illustration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IllustrationTest extends TestCase
{  
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_viewIllustrations()
    {
        Illustration::factory(2)->create();

        $response = $this->get('/illustrations');

        $response->assertStatus(302);
    }
}
