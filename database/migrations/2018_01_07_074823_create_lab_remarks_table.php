<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create( 'lab_remarks', function ( Blueprint $table ) {
		    $table->increments( 'id' );
		    $table->string( 'description' );
		    $table->integer( 'student_id' );
		    $table->integer( 'subject_id' );
		    $table->integer( 'lab_week_id' );
		    $table->date( 'date' );
		    $table->timestamps();
	    } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_remarks');
    }
}
