<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('semester_id');
            $table->timestamps();
        });

	    Schema::create('elective_subject', function (Blueprint $table) {
		    $table->integer('elective_id');
		    $table->integer('subject_id');
		    $table->primary( [ 'elective_id', 'subject_id' ] );
	    });

	    Schema::create('student_subject', function (Blueprint $table) {
		    $table->integer('student_id');
		    $table->integer('subject_id');
		    $table->integer('section_id');
		    $table->primary( [ 'student_id', 'subject_id', 'section_id' ] );
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electives');
	    Schema::dropIfExists('elective_subject');
	    Schema::dropIfExists('student_subject');
    }
}
