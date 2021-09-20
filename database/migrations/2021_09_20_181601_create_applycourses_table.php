<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplycoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applycourses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('Course');
            $table->string('Award');
            $table->string('Format');
            $table->string('Modality')->nullable();
            $table->date('Start_date');
            $table->date('End_date');
            $table->string('Status')->default('Available');
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
        Schema::dropIfExists('applycourses');
    }
}
