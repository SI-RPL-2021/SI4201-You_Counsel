<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CounselorLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group counselorchangeprofile
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
            ->assertSee('Welcome back!')
            ->type('username','skinner123')
            ->type('password','12345')
            ->press('LOGIN NOW')
            ->assertSee('Counselor Page')
            ->press('Profile')
            ->clear('phonenumber')
            ->type('phonenumber','123456789')
            ->press('Save Changes')
            ->assertInputValue('phonenumber', '123456789')
            ->press('Logout');
        });
    }
}
