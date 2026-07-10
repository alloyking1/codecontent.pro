<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmailListTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_store_an_email_list_submission(): void
    {
        $response = $this->postJson(route('email-list.store'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'job_role' => 'Developer Experience Engineer',
        ]);

        $response->assertCreated();
        $this->assertDatabaseHas('email_list', [
            'email' => 'jane@example.com',
            'job_role' => 'Developer Experience Engineer',
        ]);
    }
}
