<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MembersTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddMemberPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/members/create')
                    ->assertSeeText('Add new member');
        });
    }
}
