<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_store_an_author_request(): void
    {
        $response = $this->postJson(route('author-requests.store'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'job_role' => 'Developer Advocate',
            'website_url' => 'https://example.com',
            'message' => 'I would love to contribute technical education articles.',
            'publications' => 'https://example.com/post-1, https://example.com/post-2',
        ]);

        $response->assertCreated();
        $this->assertDatabaseHas('author_requests', [
            'email' => 'jane@example.com',
            'job_role' => 'Developer Advocate',
            'publications' => 'https://example.com/post-1, https://example.com/post-2',
        ]);
    }
}
