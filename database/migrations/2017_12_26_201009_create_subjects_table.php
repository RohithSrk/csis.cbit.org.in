<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('type');
//            $table->integer('curriculum_id');
            $table->integer('department_id');
            $table->integer('semester_id');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('employee_subject', function (Blueprint $table) {
            $table->integer('employee_id');
            $table->integer('section_id');
            $table->integer('subject_id');
            $table->primary( [ 'employee_id', 'section_id', 'subject_id' ] );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('employee_subject');
    }
}
