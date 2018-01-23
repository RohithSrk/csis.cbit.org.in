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
//	    foreach (\App\Section::all() as $section){
//	    	$batch = new \App\Batch();
//	    	$batch->name = 'Batch 1';
//	    	$batch->section_id = $section->id;
//	    	$batch->save();
//
//	    	$batch = new \App\Batch();
//	    	$batch->name = 'Batch 2';
//	    	$batch->section_id = $section->id;
//	    	$batch->save();
//
//	    	$batch = new \App\Batch();
//	    	$batch->name = 'Batch 3';
//	    	$batch->section_id = $section->id;
//	    	$batch->save();
//	    }

//	    for ($i = 1; $i <= 12; $i++){
//	    	$labWeek = new \App\LabWeek();
//	    	$labWeek->label = "Week {$i}";
//	    	$labWeek->save();
//	    }

//	    $role =  Role::find(2);
//	    foreach (User::all() as $user){
//	    	$user->roles()->attach($role);
//	    }

$json=<<<EOL
[
  {
	  "email": "msdas@cbit.ac.in",
    "id": "10501",
    "name": "Dr. C.R.K. Reddy"
  },
  {
	  "email": "yrd@cbit.ac.in",
    "id": "10503",
    "name": "Dr. Y. Ramadevi"
  },
  {
	  "email": "",
    "id": "10504",
    "name": "N. Ramadevi"
  },
  {
	  "email": "hod_cse@cbit.ac.in",
    "id": "10505",
    "name": "Dr. M. Swamy Das"
  },
  {
	  "email": "",
    "id": "10506",
    "name": "V. Madhusudan Rao"
  },
  {
	  "email": "kadapasagar@cbit.ac.in",
    "id": "10507",
    "name": "Dr.K. Sagar"
  },
  {
	  "email": "chinaramu@cbit.ac.in",
    "id": "10508",
    "name": "S. China Ramu"
  },
  {
	  "email": "",
    "id": "10510",
    "name": "T. Sridevi"
  },
  {
	  "email": "padmalatha@cbit.ac.in",
    "id": "10511",
    "name": "E. Padmalatha"
  },
  {
	  "email": "ravindra_rkk@cbit.ac.in",
    "id": "10512",
    "name": "R. Ravinder Reddy"
  },
  {
	  "email": "srujanainturi@cbit.ac.in",
    "id": "10513",
    "name": "I. Srujana"
  },
  {
	  "email": "",
    "id": "10515",
    "name": "G. Vivek"
  },
  {
	  "email": "",
    "id": "10517",
    "name": "Ch. Vijaya Lakshmi"
  },
  {
	  "email": "sangeetha@cbit.ac.in",
    "id": "10518",
    "name": "A. Sangeetha"
  },
  {
	  "email": "",
    "id": "10519",
    "name": "B. Ramadasu"
  },
  {
	  "email": "kalpana_e@cbit.ac.in",
    "id": "10520",
    "name": "E. Kalpana"
  },
  {
	  "email": "marysudha@cbit.ac.in",
    "id": "10521",
    "name": "K. Mary Sudha Rani"
  },
  {
	  "email": "vanitha_cse@cbit.ac.in",
    "id": "10522",
    "name": "G. Vanitha"
  },
  {
	  "email": "",
    "id": "10523",
    "name": "G. Sandhya Rani"
  },
  {
	  "email": "suvarna_t@cbit.ac.in",
    "id": "10524",
    "name": "T. Suvarna Kumari"
  },
  {
	  "email": "satish_b@cbit.ac.in",
    "id": "10525",
    "name": "B. Sateesh"
  },
  {
	  "email": "vimala.ruth@cbit.ac.in",
    "id": "10526",
    "name": "P. Vimala Manohara Ruth"
  },
  {
	  "email": "",
    "id": "10527",
    "name": "G. Kavitha"
  },
  {
	  "email": "spandana.k@cbit.ac.in",
    "id": "10528",
    "name": "K. Spandana"
  },
  {
	  "email": "venugopal.m@cbit.ac.in",
    "id": "10529",
    "name": "M. Venugopala Chary"
  },
  {
	  "email": "madhavisudha@cbit.ac.in",
    "id": "10530",
    "name": "Ch. Madhavi Sudha"
  },
  {
	  "email": "bhanu.mudundi@cbit.ac.in",
    "id": 10531,
    "name": "M. Bhanu Chandrika"
  },
  {
	  "email": "akavita@cbit.ac.in",
    "id": "10534",
    "name": "Kavita Agarwal"
  },
  {
	  "email": "",
    "id": "10536",
    "name": "A. Mohan"
  },
  {
	  "email": "ramanareddy.b@cbit.ac.in",
    "id": "10537",
    "name": "B. Ramana Reddy"
  },
  {
	  "email": "",
    "id": "10538",
    "name": "G. Mamatha"
  },
  {
	  "email": "dnjyothi@cbit.ac.in",
    "id": "10539",
    "name": "D. Naga jyothi"
  },
  {
	  "email": "",
    "id": "10541",
    "name": "Ravikiran Kolagani"
  },
  {
	  "email": "",
    "id": "10542",
    "name": "B. Sindhuja"
  },
  {
	  "email": "swathiedem@cbit.ac.in",
    "id": "10543",
    "name": "E. Swathi"
  },
  {
	  "email": "ishapadhy_cse@cbit.ac.in",
    "id": "10551",
    "name": "Isha Padhy"
  },
  {
	  "email": "himabindhu_cse@cbit.ac.in",
    "id": "10552",
    "name": "B. Hima Bindu"
  },
  {
	  "email": "lokeshjoel@cbit.ac.in",
    "id": "10553",
    "name": "B. Lokesh"
  },
  {
	  "email": "kiran.kunapuli@cbit.ac.in",
    "id": "10555",
    "name": "K. Kiran prakash"
  },
  {
	  "email": "sathi.durgadevi@cbit.ac.in",
    "id": "10556",
    "name": "Sathi Durga Devi"
  },
  {
	  "email": "poonguzharselvi@cbit.ac.in",
    "id": "10557",
    "name": "B. Poonguzharselvi"
  },
  {
	  "email": "srikanth.r@cbit.ac.in",
    "id": "10558",
    "name": "Srikanth R"
  },
  {
	  "email": "madhurima.rana@gmail.com",
    "id": "10559",
    "name": "Ms. Madhurima Rana"
  },
  {
	  "email": "govardhanreddyr@cbit.ac.in",
    "id": "10560",
    "name": "R. Govardhan Reddy"
  },
  {
	  "email": "shiva.jakkuva@cbit.ac.in",
    "id": "10561",
    "name": "J Shiva Sai"
  },
  {
	  "email": "sahithi.t@cbit.ac.in",
    "id": "10562",
    "name": "Smt T. Sahithi"
  },
  {
	  "id": "10563",
    "name": "Maanasa Thogaru"
  },
  {
	  "email": "",
    "id": "20014",
    "name": "Y. Prasada Rao"
  },
  {
	  "email": "",
    "id": "20018",
    "name": "B. Swathi"
  },
  {
	  "email": "",
    "id": "20019",
    "name": "K. Srilatha"
  },
  {
	  "email": "",
    "id": "20029",
    "name": "Y. Madhu"
  },
  {
	  "email": "",
    "id": "20304",
    "name": "B. Sangeev Kumar"
  },
  {
	  "email": "",
    "id": "20501",
    "name": "E. Sanjeeva Reddy"
  },
  {
	  "email": "",
    "id": "20510",
    "name": "R. Navanadh"
  },
  {
	  "email": "",
    "id": "20601",
    "name": "M. Naga Jyothi"
  },
  {
	  "email": "",
    "id": "20602",
    "name": "P. Ramesh Babu"
  },
  {
	  "email": "",
    "id": "20603",
    "name": "G. Kotibabu"
  },
  {
	  "email": "",
    "id": "21201",
    "name": "M. Surya Prakash Rao"
  },
  {
	  "email": "",
    "id": "21202",
    "name": "R. Anand Raj"
  },
  {
	  "email": "",
    "id": "21609",
    "name": "K. Kalpana"
  },
  {
	  "email": "",
    "id": "21735",
    "name": "Syed Moulali"
  },
  {
	  "email": "libdum4@gmail.com",
    "id": 21999,
    "name": "Test acct"
  }
]
EOL;

foreach (json_decode($json) as $empjson){
	if(!empty($empjson->email)){
		$emp = \App\Employee::find($empjson->id);

		if(! empty( $emp )){
			$empu = $emp->user()->first();
			$emp->email = $empjson->email;
			$empu->email = $empjson->email;
			$emp->save();
			$empu->save();
		}
	}

}

    }
}
