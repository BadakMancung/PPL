<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogOut(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'dhaifanazhar@gmail.com')
                ->type('password', '12345667')
                ->press('LOG IN')
                ->waitForText('Notes')
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->assertSee('Dhaifan Azhar')
                ->click('@dropdown-toggle') 
                ->pause(200)
                ->click('@logout-button') 
                ; 
        });
    }
}
