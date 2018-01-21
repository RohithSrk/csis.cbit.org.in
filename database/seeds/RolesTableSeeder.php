<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $role_employee = new App\Role();
	    $role_employee->name = 'Principal';
	    $role_employee->description = 'Principal User';
	    $role_employee->save();

	    $role_manager = new App\Role();
	    $role_manager->name = 'HOD';
	    $role_manager->description = 'Head of the Department';
	    $role_manager->save();

	    $role_manager = new App\Role();
	    $role_manager->name = 'Faculty';
	    $role_manager->description = 'Faculty User';
	    $role_manager->save();
    }
}
