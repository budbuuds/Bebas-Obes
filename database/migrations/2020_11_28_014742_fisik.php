<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fisik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisik', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->date('tanggal');
            $table->string('jenis1');
            $table->string('durasi1');
            $table->string('jenis2')->nullable();
            $table->string('durasi2')->nullable();
            $table->string('jenis3')->nullable();
            $table->string('durasi3')->nullable();
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
        Schema::dropIfExists('fisik');
    }
}
