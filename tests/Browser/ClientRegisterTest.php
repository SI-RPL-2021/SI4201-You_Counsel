<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClientRegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group clientregister
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/register')
                    ->assertSee('Already have an account?')
                    ->type('username','ariafajar')
                    ->type('name','ariafajarramdhany')
                    ->type('email','ariafajar@asik.com')
                    ->type('univname','universitas pasundan')
                    ->type('address','bojong gede')
                    ->type('phonenumber','0823452334')
                    ->type('password','12345')
                    ->press('REGISTER NOW');
        });
    }
}
