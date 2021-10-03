<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuilifactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quilifactions', function (Blueprint $table) {
            $table->id('quilification_id');
            $table->string('Subject');
            $table->string('Exam_body');
            $table->string('Award_type');
            $table->string('Grade');
            $table->Year('Year');
            $table->foreignId('student_id')->constrained('users','student_id');
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
        Schema::dropIfExists('quilifactions');
    }
}
