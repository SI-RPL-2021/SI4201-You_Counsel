<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClientMessageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group clientmessage
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/client_leavemessage')
                    ->assertSee('Leave Us a Message')
                    ->type('pesanclient','Help')
                    ->press('Send');
                    
        });
    }
}
