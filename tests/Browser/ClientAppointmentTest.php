<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClientAppointmentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group clientappointment
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/client_scheduleappointment')
                    ->assertSee('Schedule an Appointment')
                    ->select('type','Personal Development')
                    ->select('counselorid','B. F. Skinner')
                    ->select('method','Video Call')
                    ->type('reason','Contact me as soon as possible')
                    ->press('Send');
                    ;
        });
    }
}
