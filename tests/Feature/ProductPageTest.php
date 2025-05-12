<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;

class ProductsPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_page_displays_products_by_category(): void
    {
        $category = Category::factory()->create(['name' => 'Toys']);
        Product::factory()->count(3)->create(['category_id' => $category->id]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSeeText('Toys');
        $response->assertSeeTextInOrder(
            Product::where('category_id', $category->id)->pluck('name')->toArray()
        );
    }
}
