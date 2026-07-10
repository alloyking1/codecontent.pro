<?php

namespace Tests\Feature\Admin;

use App\Models\AuthorRequest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorRequestManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_author_requests(): void
    {
        $user = User::factory()->create();

        AuthorRequest::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'job_role' => 'Developer Advocate',
            'website_url' => 'https://example.com',
            'message' => 'I would love to write here.',
            'publications' => 'https://example.com/post-1',
        ]);

        $response = $this->actingAs($user)->get(route('admin.author-requests.index'));

        $response->assertOk();
        $response->assertSee('Jane Doe');
        $response->assertSee('jane@example.com');
        $response->assertSee('Developer Advocate');
    }
}
