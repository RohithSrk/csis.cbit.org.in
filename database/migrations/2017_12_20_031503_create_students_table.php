<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create( 'students', function ( Blueprint $table ) {
		    $table->increments( 'id' );
		    $table->string( 'admission_num' )->unique();
		    $table->string( 'rollnum' )->unique();
		    $table->string( 'name' );
		    $table->string( 'gender', 8 );
		    $table->string( 'father_name' );
		    $table->date( 'admission_date' );
		    $table->string( 'student_mobile' );
		    $table->string( 'parent_mobile' );
		    $table->string( 'email' );
		    $table->integer( 'batch_id' );
		    $table->integer( 'user_id' );
		    $table->timestamps();
	    } );

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
        Schema::dropIfExists('students');
        Schema::dropIfExists('student_subject');
    }
}
