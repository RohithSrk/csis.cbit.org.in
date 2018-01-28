<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->string('designation');
	        $table->string('email');
	        $table->string('mobile');
	        $table->integer('user_id');
            $table->timestamps();
        });

	    Schema::create('department_employee', function (Blueprint $table) {
		    $table->integer('employee_id');
		    $table->integer('department_id');
		    $table->primary( [ 'employee_id', 'department_id' ] );
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
        Schema::dropIfExists('department_employee');
    }
}
