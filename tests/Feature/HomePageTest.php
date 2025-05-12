<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads_successfully_and_shows_three_random_products(): void
    {
        Product::factory()->count(10)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Caring for Pets'); // Change to a phrase you know is on your homepage
        $this->assertEquals(3, $response->viewData('randomProducts')->count());
    }
}
