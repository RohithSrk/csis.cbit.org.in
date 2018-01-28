<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
	    $role_principal = App\Role::where('name', 'Principal')->first();
	    $role_hod  = App\Role::where('name', 'HOD')->first();
	    $role_faculty  = App\Role::where('name', 'Faculty')->first();

	    $principal = new App\Employee();
	    $principal->first_name = $faker->firstName;
	    $principal->last_name = $faker->lastName;
	    $principal->email = $faker->email;
	    $principal->mobile = $faker->phoneNumber;
	    $principal->save();

	    $user = new App\User();
	    $user->username = '';
	    $user->email = $principal->email;
	    $user->password = bcrypt('123456');
	    $user->employee_id = $principal->id;
	    $user->save();
	    $user->roles()->attach($role_principal);

	    $hod = new App\Employee();
	    $hod->first_name = $faker->firstName;
	    $hod->last_name = $faker->lastName;
	    $hod->email = $faker->email;
	    $hod->mobile = $faker->phoneNumber;
	    $hod->save();

	    $user = new App\User();
	    $user->username = '';
	    $user->email = $hod->email;
	    $user->password = bcrypt('123456');
	    $user->employee_id = $hod->id;
	    $user->save();
	    $user->roles()->attach($role_hod);

	    for ($i = 0; $i < 5; $i++){
			$faculty = new App\Employee();
			$faculty->first_name = $faker->firstName;
			$faculty->last_name = $faker->lastName;
			$faculty->email = $faker->email;
			$faculty->mobile = $faker->phoneNumber;
			$faculty->save();

			$user = new App\User();
			$user->username = '';
			$user->email = $faculty->email;
			$user->password = bcrypt('123456');
			$user->employee_id = $faculty->id;
			$user->save();
			$user->roles()->attach($role_faculty);
		}
    }
}
