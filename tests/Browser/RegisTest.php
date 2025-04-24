<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegis(): void
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/')
                        ->assertSee('Register')
                        ->clickLink('Register')
                        ->assertPathIs('/register')
                        ->type('email', 'ifan005ashar@gmail.com')
                        ->type('password', '12345667')
                        ->press('REGISTER');
            });
        }
}
