<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNotes(): void
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'dhaifanazhar@gmail.com')
                    ->type(field: 'password', value: '12345667')
                    ->press(button: 'LOG IN')
                    ->waitForText('Notes')
                    ->clickLink('Notes')
                    ->assertPathIs(path: '/notes')
                    ->pause(5000)
                    ->clickLink('Create Note')
                    ->type(field:'title', value:'Badak Mancung')
                    ->type(field:'description', value:'Tes1234')
                    ->press(button:'CREATE');
            });
        }
}
