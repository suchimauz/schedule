<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->string('week');
            $table->string('type');
            $table->string('first_lesson_name')->nullable();
            $table->string('first_lesson_teacher')->nullable();
            $table->string('second_lesson_name')->nullable();
            $table->string('second_lesson_teacher')->nullable();
            $table->string('third_lesson_name')->nullable();
            $table->string('third_lesson_teacher')->nullable();
            $table->string('fouth_lesson_name')->nullable();
            $table->string('fouth_lesson_teacher')->nullable();
            $table->string('fifth_lesson_name')->nullable();
            $table->string('fifth_lesson_teacher')->nullable();
            $table->string('sixth_lesson_name')->nullable();
            $table->string('sixth_lesson_teacher')->nullable();
            $table->string('seventh_lesson_name')->nullable();
            $table->string('seventh_lesson_teacher')->nullable();
            $table->string('eight_lesson_name')->nullable();
            $table->string('eight_lesson_teacher')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
