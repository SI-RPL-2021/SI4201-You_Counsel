<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselor', function (Blueprint $table) {
            $table->id();
            $table->string('counselorid');
            $table->string('username');
            $table->string('name');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('password');
            $table->smallInteger('access');
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
        Schema::dropIfExists('counselor');
    }
}
