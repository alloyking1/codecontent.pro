<?php

namespace Tests\Feature;

use App\Models\ContactUs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactUsTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_form_posts_to_the_contact_store_route(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
        $response->assertSee('method="POST"', false);
        $response->assertSee('action="' . route('contact-us.store') . '"', false);
    }

    public function test_contact_form_submission_persists_a_contact_request(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'company' => 'ACME',
            'service' => 'technical-content',
            'message' => 'We need technical documentation support.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success', 'Thanks! Your message has been received. We will be in touch soon.');

        $this->assertDatabaseHas('contact_us_table', [
            'email' => 'ada@example.com',
            'service' => 'technical-content',
        ]);
        $this->assertEquals(1, ContactUs::count());
    }
}
