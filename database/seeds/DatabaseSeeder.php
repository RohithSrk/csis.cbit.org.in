<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

use App\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
	    // Role comes before User seeder here.
//	    $this->call(RolesTableSeeder::class);
//	     User seeder will use the roles above created.
//	    $this->call(UsersTableSeeder::class);

//		for ($i = 0; $i < 5; $i++){
//			$emp = new App\Employee();
//			$emp->first_name = $faker->firstName;
//			$emp->last_name = $faker->lastName;
//			$emp->email = $faker->email;
//			$emp->mobile = $faker->phoneNumber;
//			$emp->employee_type_id = 2;
//			$emp->save();
//
//			$user = new App\User();
//			$user->username = '';
//			$user->email = $emp->email;
//			$user->password = bcrypt('123456');
//			$user->employee_id = $emp->id;
//			$user->save();
//		}
//
//	    $rn = "190116733001";
//
//		for($i = 0; $i < 5; $i++){
//			$student = new App\Student();
//			$student->rollnum = $rn++;
//			$student->first_name = $faker->firstName;
//			$student->last_name = $faker->lastName;
//			$student->email = $faker->email;
//			$student->mobile = $faker->phoneNumber;
//			$student->batch_id = 3;
//			$student->save();
//		}
//
//		for($i = 0; $i < 5; $i++){
//			$student = new App\Student();
//			$student->rollnum = $rn++;
//			$student->first_name = $faker->firstName;
//			$student->last_name = $faker->lastName;
//			$student->email = $faker->email;
//			$student->mobile = $faker->phoneNumber;
//			$student->batch_id = 2;
//			$student->save();
//		}
//
//		for($i = 0; $i < 10; $i++){
//			$student = new App\Student();
//			$student->rollnum = $rn++;
//			$student->first_name = $faker->firstName;
//			$student->last_name = $faker->lastName;
//			$student->email = $faker->email;
//			$student->mobile = $faker->phoneNumber;
//			$student->batch_id = 4;
//			$student->save();
//		}

//	    $subject = new Subject();
//	    $subject->name = 'Object Oriented Programming Lab using Java';
//	    $subject->code = '16CSC08';
//	    $subject->type = 'Practical';
//	    $subject->curriculum_id = 1;
//	    $subject->department_id = 1;
//	    $subject->save();
//
//	    $subject = new Subject();
//	    $subject->name = 'Data Structures Lab';
//	    $subject->code = '16CSC07';
//	    $subject->type = 'Practical';
//	    $subject->curriculum_id = 1;
//	    $subject->department_id = 1;
//	    $subject->save();
//
//	    $subject = new Subject();
//	    $subject->name = 'Soft Skills and Employability Enhancement Lab';
//	    $subject->code = '16EGC03';
//	    $subject->type = 'Practical';
//	    $subject->curriculum_id = 1;
//	    $subject->department_id = 1;
//	    $subject->save();
//
//	    $subject = new Subject();
//	    $subject->name = 'Mini Project - I';
//	    $subject->code = '16EGC09';
//	    $subject->type = 'Practical';
//	    $subject->curriculum_id = 1;
//	    $subject->department_id = 1;
//	    $subject->save();
//
//	    $subject = new Subject();
//	    $subject->name = 'Discrete Structures';
//	    $subject->code = '16EGC06';
//	    $subject->type = 'Theory';
//	    $subject->curriculum_id = 1;
//	    $subject->department_id = 1;
//	    $subject->save();

//	    foreach (\App\Employee::all() as $emp){
//		    $user = new App\User();
//			$user->username = '';
//			$user->email = $emp->email;
//			$user->password = bcrypt('123456');
//			$user->employee_id = $emp->id;
//			$user->save();
//	    }

//	    $i = 0;
//	    foreach (\App\Year::all() as $year) {
//			$semester = new \App\Semester();
//			$semester->name = 'Semester ' . ++$i;
//			$semester->year_id = $year->id;
//			$semester->save();
//
//			$semester = new \App\Semester();
//			$semester->name = 'Semester ' . ++$i;
//			$semester->year_id = $year->id;
//			$semester->save();
//	    }

//	    foreach (\App\Semester::all() as $semester){
//	    	$section = new \App\Section();
//	    	$section->name = 'CSE1';
//	    	$section->semester_id = $semester->id;
//	    	$section->year_id = $semester->year()->first()->id;
//	    	$section->save();
//
//	    	$section = new \App\Section();
//	    	$section->name = 'CSE2';
//	    	$section->semester_id = $semester->id;
//	    	$section->year_id = $semester->year()->first()->id;
//	    	$section->save();
//
//	    	$section = new \App\Section();
//	    	$section->name = 'CSE3';
//	    	$section->semester_id = $semester->id;
//	    	$section->year_id = $semester->year()->first()->id;
//	    	$section->save();
//	    }
//
	    foreach (\App\Section::all() as $section){
	    	$batch = new \App\Batch();
	    	$batch->name = 'Batch 1';
	    	$batch->section_id = $section->id;
	    	$batch->save();

	    	$batch = new \App\Batch();
	    	$batch->name = 'Batch 2';
	    	$batch->section_id = $section->id;
	    	$batch->save();

	    	$batch = new \App\Batch();
	    	$batch->name = 'Batch 3';
	    	$batch->section_id = $section->id;
	    	$batch->save();
	    }

//	    for ($i = 1; $i <= 12; $i++){
//	    	$labWeek = new \App\LabWeek();
//	    	$labWeek->label = "Week {$i}";
//	    	$labWeek->save();
//	    }

//	    $role =  Role::find(2);
//	    foreach (User::all() as $user){
//	    	$user->roles()->attach($role);
//	    }
    }
}
