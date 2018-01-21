<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feedback_id');
            $table->integer('student_id');
            $table->integer('section_id');
            $table->integer('subject_id');
            $table->integer('employee_id');
            $table->integer('X1');
            $table->integer('X2');
            $table->integer('X3');
            $table->integer('X4');
            $table->float('percentage');
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
        Schema::dropIfExists('feedback_data');
    }
}
