<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nutrisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrisi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->date('tanggal');
            $table->string('pagi');
            $table->string('siang');
            $table->string('malam');
            $table->string('selingan')->nullable();
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
        Schema::dropIfExists('nutrisi');
    }
}
