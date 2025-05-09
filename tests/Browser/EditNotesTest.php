<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditNote(): void
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
                    ->waitFor('@edit-3')
                    ->pause(1000)
                    ->click('@edit-3')
                    ->assertPathIs('/edit-note-page/3')
                    ->type(field: 'title', value: 'Badak Mancung')
                    ->type(field: 'description', value: 'Berhasil Di ubah')
                    ->press(button:'UPDATE')
                    ;
        });
    }
}
