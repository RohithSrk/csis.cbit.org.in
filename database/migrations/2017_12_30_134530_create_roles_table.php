<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->string('description');
            $table->timestamps();
        });

	    Schema::create('role_user', function (Blueprint $table) {
		    $table->integer('role_id')->unsigned();
		    $table->integer('user_id')->unsigned();
		    $table->primary(['role_id', 'user_id']);
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
	    Schema::dropIfExists('role_user');

    }
}
