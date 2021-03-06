<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class JournalCekTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group journalcek
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Welcome back!')
                    ->type('username', 'skinner123')
                    ->type('password', '12345')
                    ->press('LOGIN NOW')    
                    ->assertSee('Counselor Page')
                    ->press('Go to Journal Checker')
                    ->type('username', 'aria')
                    ->press('Submit');

                  //  $browser->visit('http://127.0.0.1:8000/counselor_journal_checker')
                  //   ->assertSee('Journal Checker')
                  //  ->type('username','user')
                  //  ->press('Submit');
        });
    }
}
