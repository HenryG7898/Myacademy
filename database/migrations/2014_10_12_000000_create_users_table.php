<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Gender');
            $table->date('DOB');
            $table->string('address');
            $table->string('parish');
           $table->string('Profile')->default('default');
            $table->string('telephone');
            $table->string('trn');
            $table->string('Status')->default('Student');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
            Schema::dropIfExists('users');
        }

}
