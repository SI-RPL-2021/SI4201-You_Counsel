<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentreqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointmentreq', function (Blueprint $table) {
            $table->id();
            $table->string('requesteddate');
            $table->string('clientid');
            $table->string('clientname');
            $table->string('counselorid');
            $table->string('type');
            $table->string('method');
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointmentreq');
    }
}
