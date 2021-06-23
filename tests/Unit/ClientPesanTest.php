<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ClientPesanController;
class ClientPesanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function testMethod() {
        $your = new ClientPesanController();
        $hasil = $your->exMethod(4,4);
        $this->assertEquals(8, $hasil);
    }
}
