<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('no_ktp');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->enum('gender', ['L', 'P']);
            $table->string('religion');
            $table->enum('blood', ['A', 'B', 'AB', 'O']);
            $table->enum('status_merried', ['Ya', 'Tidak']);
            $table->string('domicile');
            $table->string('curent_address');
            $table->string('email');
            $table->string('hp');
            $table->string('call_urgent');
            $table->string('skill');
            $table->integer('expected_salary');
            $table->enum('availablle_another_place', [true, false]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('biodata');
    }

}
