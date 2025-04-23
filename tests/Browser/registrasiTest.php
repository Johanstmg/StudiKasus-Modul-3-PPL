<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class registrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->type('name', 'John')
                    ->type('email', 'user@gmail.com')
                    ->type('password', '123456')
                    ->type('password_confirmation', '123456')
                    ->press('REGISTER');
                    
        });
    }
}
