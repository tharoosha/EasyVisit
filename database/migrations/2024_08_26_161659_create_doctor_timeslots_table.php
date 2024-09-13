<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTimeslotsTable extends Migration
{
    public function up()
    {
        Schema::create('doctortimeslots', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('no_of_tokens');
            $table->string('details');
            $table->integer('doctor_id');
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('doctortimeslots');
    }

    
}