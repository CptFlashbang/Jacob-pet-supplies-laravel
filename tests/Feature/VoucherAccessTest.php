<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class VoucherAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_voucher_page(): void
    {
        $response = $this->get('/voucher/print'); // ✅ fix here
        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_access_voucher_page(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/voucher/print'); // ✅ fix here too
        $response->assertStatus(200);
        $response->assertSeeText('Your Discount Voucher'); // or whatever text exists in your view
    }

}
