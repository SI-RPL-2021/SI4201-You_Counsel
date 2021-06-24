<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Welcome back!')
                    ->type('username','todosantana')
                    ->type('password','12345')
                    ->press('LOGIN NOW')
                    ->visit('http://127.0.0.1:8000/admin_homepage')
                    ->press('Go to Admin Lists')
                    ->assertSee('todosantana@gmail.com')
                    ->press('Counselor List')
                    ->assertSee('skinner@gmail.com')
                    ;
        });
    }
}
