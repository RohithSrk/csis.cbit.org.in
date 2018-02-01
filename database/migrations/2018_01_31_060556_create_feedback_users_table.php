<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_users', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('student');
	        $table->string('username');
	        $table->string('password');
	        $table->string('plain_password');
	        $table->integer('section_id');
	        $table->integer('feedback_id');
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
        Schema::dropIfExists('feedback_users');
    }
}
