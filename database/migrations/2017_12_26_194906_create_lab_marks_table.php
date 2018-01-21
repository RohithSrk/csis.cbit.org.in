<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_marks', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('student_id');
	        $table->integer('mark_type_id');
	        $table->integer('marks_scored');
	        $table->date('date');
	        $table->integer('lab_week_id');
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
        Schema::dropIfExists('lab_marks');
    }
}
