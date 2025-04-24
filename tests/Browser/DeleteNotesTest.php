<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testDeleteNote(): void
    {
        $this->browse(callback: function (Browser $browser):void {
            $browser->visit(url:"/")
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'dhaifanazhar@gmail.com')
                    ->type(field: 'password', value: '12345667')
                    ->press(button: 'LOG IN')
                    ->waitForText('Notes')
                    ->clickLink('Notes')
                    ->assertPathIs(path: '/notes')
                    ->pause(1000)
                    ->press('#delete-3')
                    ;
        });
    }
}
