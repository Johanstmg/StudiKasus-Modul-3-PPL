<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class createnotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->type('email', 'user@gmail.com')
                    ->type('password', '123456')
                    ->press('LOG IN')
                    ->assertSee('Dashboard')
                    ->clickLink('Notes')
                    ->assertSee('Notes')
                    ->clickLink('Create Note')
                    ->type('title', 'ayam')
                    ->type('content', 'goreng')
                    ->press('CREATE')
                    ->assertSee('Notes');
        });
    }
}
