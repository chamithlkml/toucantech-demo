<?php

namespace Tests\Feature;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;
use App\Models\School;

class MemberTest extends TestCase
{

    /**
     * Tests loading of create member page
     *
     * @return void
     */
    public function test_create_member_page_loads(): void
    {
        $response = $this->get('/members/create');

        $response->assertStatus(200);
        
    }

    /**
     * Tests for initial schools seed
     *
     * @return void
     */
    public function test_create_member_page_has_schools(): void
    {
        School::factory()
                ->count(20)
                ->create();
        $response = $this->get('/members/create');

        $response->assertInertia(fn (Assert $inertia) => $inertia
            ->component('Member/Create')
            ->has('schools', School::all()->count())
        );
    }

    /**
     * Tests members view page loads
     *
     * @return void
     */
    public function test_view_members_page_loads(): void
    {
        $response = $this->get('/members/show');

        $response->assertStatus(200);
    }

    /**
     * Tests members view page has schools
     *
     * @return void
     */
    public function test_view_members_page_has_schools(): void
    {
        School::factory()
                ->count(20)
                ->create();
        $response = $this->get('/members/show');

        $response->assertInertia(fn (Assert $inertia) => $inertia
            ->component('Member/Show')
            ->has('schools', School::all()->count())
        );
    }

}
