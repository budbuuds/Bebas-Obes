<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Identifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifikasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->string('name')->nullable();
            $table->integer('tinggi');
            $table->integer('berat_asli');
            $table->integer('berat_ideal')->nullable();
            $table->string('kategori')->nullable();
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
        Schema::dropIfExists('identifikasi');
    }
}
