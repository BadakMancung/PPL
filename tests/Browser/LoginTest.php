<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */

        public function testLogin(): void
        {
            $this->browse(callback: function (Browser $browser):void {
                $browser->visit(url:"/")
                    ->AssertSee('Log in')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'ifan04ashar@gmail.com')
                    ->type(field: 'password', value: '12345667')
                    ->press(button: 'LOG IN');
            });
        }
    
    }