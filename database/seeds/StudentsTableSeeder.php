<?php

use App\Role;
use App\Semester;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use App\Subject;

class StudentsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//		$semester = Semester::find(6);
//		$section1 = $semester->sections->get(0);
//		$batch1 = $section1->batches->get(0)->id;
//		$batch2 = $section1->batches->get(1)->id;
//		$batch3 = $section1->batches->get(2)->id;
//
//		$batches = [
//			$batch1 => array_merge( range( 160115733001, 160115733011 ),
//				range( 160115733013, 160115733024 ),
//				range( 160115733026, 160115733028 ) ),
//			$batch2 => array_merge( range( 160115733029, 160115733053 ),
//				[ 160115733055 ]),
//			$batch3 => array_merge( range( 160115733056, 160115733060 ),
//				[ 160115733181, 160114733028, 160114733048, 160114733311, 160114733027, 160114733036 ],
//				range( 160115733301, 160115733312 ) ),
//		];
//
//		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList34cse-1.csv' ) ));
//
//		foreach( $students as $i => $student ){
//			if ( $i >= 7 ) {
//				if ( ! empty( $student ) ) {
//					$student_arr = explode( ',', $student );
//					if ( is_array( $student_arr ) ) {
//
//						$student = new App\Student();
//						$student->admission_num = $student_arr[1];
//						$student->rollnum = (float) $student_arr[2];
//						$student->name = $student_arr[3];
//						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
//						$student->father_name = $student_arr[5];
//						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
//						$student->student_mobile = $student_arr[7];
//						$student->parent_mobile = $student_arr[8];
//						$student->email = '';
//
//						foreach ($batches as $batch_id => $rollnums ){
//							if( in_array( $student->rollnum, $rollnums ) ){
//								$student->batch_id = $batch_id;
//							}
//						}
//
//						$user = new App\User();
//						$user->username = $student->rollnum;
//						$user->email = $student->email;
//						$user->password = bcrypt($student->rollnum);
//						$user->save();
//
//						$role =  Role::find(6);
//				        $user->roles()->attach($role);
//
//						$student->user_id = $user->id;
//						$student->save();
//
//					}
//				}
//			}
//		}

		$semester = Semester::find(6);
		$section2 = $semester->sections->get(1);
		$batch1 = $section2->batches->get(0)->id;
		$batch2 = $section2->batches->get(1)->id;
		$batch3 = $section2->batches->get(2)->id;

		$batches = [
			$batch1 => array_merge( range( 160115733061, 160115733085 ) ),
			$batch2 => array_merge( range( 160115733086, 160115733087 ),
				range( 160115733089, 160115733094 ),
				range( 160115733096, 160115733099 ),
				range( 160115733101, 160115733113 ) ),
			$batch3 => array_merge( range( 160115733114, 160115733120 ),
				[ 160115733182, 160114733069, 160114733077, 160113733064, 160113733123 ],
				range( 160115733313, 160115733323 ) ),
		];

		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList34cse-2.csv' ) ));

		foreach( $students as $i => $student ){
			if ( $i >= 7 ) {
				if ( ! empty( $student ) ) {
					$student_arr = explode( ',', $student );
					if ( is_array( $student_arr ) ) {

						$student = new App\Student();
						$student->admission_num = $student_arr[1];
						$student->rollnum = (float) $student_arr[2];
						$student->name = $student_arr[3];
						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
						$student->father_name = $student_arr[5];
						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
						$student->student_mobile = $student_arr[7];
						$student->parent_mobile = $student_arr[8];
						$student->email = '';

						foreach ($batches as $batch_id => $rollnums ){
							if( in_array( $student->rollnum, $rollnums ) ){
								$student->batch_id = $batch_id;
							}
						}

						$user = new App\User();
						$user->username = $student->rollnum;
						$user->email = $student->email;
						$user->password = bcrypt($student->rollnum);
						$user->save();

						$role =  Role::find(6);
				        $user->roles()->attach($role);

						$student->user_id = $user->id;
						$student->save();

					}
				}
			}
		}

		$semester = Semester::find(6);
		$section3 = $semester->sections->get(2);
		$batch1 = $section3->batches->get(0)->id;
		$batch2 = $section3->batches->get(1)->id;
		$batch3 = $section3->batches->get(2)->id;

		$batches = [
			$batch1 => array_merge( range( 160115733121, 160115733134 ), range( 160115733136, 160115733146 ) ),
			$batch2 => array_merge( range( 160115733147, 160115733162 ),
				range( 160115733164, 160115733170 ), [ 160115733172, 160115733173 ]),
			$batch3 => array_merge( range( 160115733174, 160115733179 ),
				[ 160115733335, 160115733336, 160114733161,  ],
				range( 160115733325, 160115733333 ) ),
		];

		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList34cse-3.csv' ) ));

		foreach( $students as $i => $student ){
			if ( $i >= 7 ) {
				if ( ! empty( $student ) ) {
					$student_arr = explode( ',', $student );
					if ( is_array( $student_arr ) ) {

						$student = new App\Student();
						$student->admission_num = $student_arr[1];
						$student->rollnum = (float) $student_arr[2];
						$student->name = $student_arr[3];
						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
						$student->father_name = $student_arr[5];
						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
						$student->student_mobile = $student_arr[7];
						$student->parent_mobile = $student_arr[8];
						$student->email = '';

						foreach ($batches as $batch_id => $rollnums ){
							if( in_array( $student->rollnum, $rollnums ) ){
								$student->batch_id = $batch_id;
							}
						}

						$user = new App\User();
						$user->username = $student->rollnum;
						$user->email = $student->email;
						$user->password = bcrypt($student->rollnum);
						$user->save();

						$role =  Role::find(6);
				        $user->roles()->attach($role);

						$student->user_id = $user->id;
						$student->save();

					}
				}
			}
		}
	}

	public function addStudents(){

//		$semester = Semester::find(8);
//		$section1 = $semester->sections->get(0);
//		$batch1 = $section1->batches->get(0)->id;
//		$batch2 = $section1->batches->get(1)->id;
//		$batch3 = $section1->batches->get(2)->id;
//
//		$batches = [
//			$batch1 => array_merge( range( 160114733001, 160114733025 ) ),
//			$batch2 => array_merge( range( 160114733029, 160114733032 ),
//				[ 160114733026, 160114733034, 160114733035 ],
//				range( 160114733037, 160114733047 ), range( 160114733049, 160114733053 ) ),
//			$batch3 => array_merge( range( 160114733057, 160114733060 ),
//				[ 160114733054, 160114733056, 160114733183, 160114733312 ],
//				range( 160114733301, 160114733310 ) ),
//		];
//
//		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList44CSE-1.csv' ) ));
//
//		foreach( $students as $i => $student ){
//			if ( $i >= 7 ) {
//				if ( ! empty( $student ) ) {
//					$student_arr = explode( ',', $student );
//					if ( is_array( $student_arr ) ) {
//
//						$student = new App\Student();
//						$student->admission_num = $student_arr[1];
//						$student->rollnum = (float) $student_arr[2];
//						$student->name = $student_arr[3];
//						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
//						$student->father_name = $student_arr[5];
//						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
//						$student->student_mobile = $student_arr[7];
//						$student->parent_mobile = $student_arr[8];
//						$student->email = '';
//
//						foreach ($batches as $batch_id => $rollnums ){
//							if( in_array( $student->rollnum, $rollnums ) ){
//								$student->batch_id = $batch_id;
//							}
//						}
//
//						$user = new App\User();
//						$user->username = $student->rollnum;
//						$user->email = $student->email;
//						$user->password = bcrypt($student->rollnum);
//						$user->save();
//
//						$role =  Role::find(6);
//				        $user->roles()->attach($role);
//
//						$student->user_id = $user->id;
//						$student->save();
//
//					}
//				}
//			}
//		}

//		$semester = Semester::find(8);
//		$section2 = $semester->sections->get(1);
//		$batch1 = $section2->batches->get(0)->id;
//		$batch2 = $section2->batches->get(1)->id;
//		$batch3 = $section2->batches->get(2)->id;
//
//		$batches = [
//			$batch1 => array_merge( range( 160114733061, 160114733068 ),
//									range( 160114733070, 160114733076 ),
//									range( 160114733078, 160114733081 ),
//									range( 160114733083, 160114733088 ) ),
//			$batch2 => array_merge( range( 160114733089, 160114733101 ), range( 160114733103, 160114733114 )),
//			$batch3 => array_merge( range( 160114733115, 160114733117 ), range( 160114733119, 160114733120 ),
//				[ 160114733184, 160113733081, 160111733124 ],
//				range( 160114733313, 160114733324 ) ),
//		];
//
//		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList44CSE-2.csv' ) ));
//
//		foreach( $students as $i => $student ){
//			if ( $i >= 7 ) {
//				if ( ! empty( $student ) ) {
//					$student_arr = explode( ',', $student );
//					if ( is_array( $student_arr ) ) {
//
//						$student = new App\Student();
//						$student->admission_num = $student_arr[1];
//						$student->rollnum = (float) $student_arr[2];
//						$student->name = $student_arr[3];
//						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
//						$student->father_name = $student_arr[5];
//						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
//						$student->student_mobile = $student_arr[7];
//						$student->parent_mobile = $student_arr[8];
//						$student->email = '';
//
//						foreach ($batches as $batch_id => $rollnums ){
//							if( in_array( $student->rollnum, $rollnums ) ){
//								$student->batch_id = $batch_id;
//							}
//						}
//
//						$user = new App\User();
//						$user->username = $student->rollnum;
//						$user->email = $student->email;
//						$user->password = bcrypt($student->rollnum);
//						$user->save();
//
//						$role =  Role::find(6);
//				        $user->roles()->attach($role);
//
//						$student->user_id = $user->id;
//						$student->save();
//
//					}
//				}
//			}
//		}

//		$semester = Semester::find(8);
//		$section3 = $semester->sections->get(2);
//		$batch1 = $section3->batches->get(0)->id;
//		$batch2 = $section3->batches->get(1)->id;
//		$batch3 = $section3->batches->get(2)->id;
//
//		$batches = [
//			$batch1 => array_merge( range( 160114733121, 160114733145 ) ),
//			$batch2 => array_merge( range( 160114733146, 160114733160 ), range( 160114733162, 160114733165 ),
//						[ 160114733167, 160114733168 ], range( 160114733171, 160114733174 ) ),
//			$batch3 => array_merge( range( 160114733175, 160114733180 ),
//				[ 160114733185, 160114733186, 160113733153 ],
//				range( 160114733325, 160114733336 ) ),
//		];
//
//		$students = explode( "\n", file_get_contents( realpath( __DIR__ . '/CSV/RollList44CSE-3.csv' ) ));
//
//		foreach( $students as $i => $student ){
//			if ( $i >= 7 ) {
//				if ( ! empty( $student ) ) {
//					$student_arr = explode( ',', $student );
//					if ( is_array( $student_arr ) ) {
//
//						$student = new App\Student();
//						$student->admission_num = $student_arr[1];
//						$student->rollnum = (float) $student_arr[2];
//						$student->name = $student_arr[3];
//						$student->gender = $student_arr[4] == 'M' ? 'male' : 'female';
//						$student->father_name = $student_arr[5];
//						$student->admission_date = Carbon::createFromFormat('d-m-Y',  $student_arr[6]);
//						$student->student_mobile = $student_arr[7];
//						$student->parent_mobile = $student_arr[8];
//						$student->email = '';
//
//						foreach ($batches as $batch_id => $rollnums ){
//							if( in_array( $student->rollnum, $rollnums ) ){
//								$student->batch_id = $batch_id;
//							}
//						}
//
//						$user = new App\User();
//						$user->username = $student->rollnum;
//						$user->email = $student->email;
//						$user->password = bcrypt($student->rollnum);
//						$user->save();
//
//						$role =  Role::find(6);
//				        $user->roles()->attach($role);
//
//						$student->user_id = $user->id;
//						$student->save();
//
//					}
//				}
//			}
//		}
	}

	public function seedBatches(){
		foreach (\App\Student::all() as $student){
			if(preg_match( '/^160116733(\d{3})$/', $student->rollnum, $matches ) ){
				$arr = range(1, 23);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '025';
				$arr[] = '026';

				if(in_array($matches[1], $arr)){
					$student->batch_id = 28;
					$student->save();
				}

				$arr = [];

				$arr = range(27, 34);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '036';
				$arr[] = '048';
				$arr[] = '050';
				$arr[] = '053';

				if(in_array($matches[1], $arr)){
					$student->batch_id = 29;
					$student->save();
				}

				$arr = [];

				$arr = range(54, 60);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '181';
				$arr[] = '183';
				$arr[] = '184';
				$arr[] = '186';

				$arr2 = range(301, 302);
				$arr2 = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr2);

				$arr = array_merge( $arr2, $arr );

				if(in_array($matches[1], $arr)){
					$student->batch_id = 30;
					$student->save();
				}
				/*======= 2/4 sec 2=======*/
				$arr = [];

				$arr = range(61, 86);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				if(in_array($matches[1], $arr)){
					$student->batch_id = 31;
					$student->save();
				}

				$arr = [];

				$arr = range(90, 99);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '087';
				$arr[] = '089';

				$arr2 = range(101, 114);
				$arr2 = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr2);

				$arr = array_merge( $arr2, $arr );

				if(in_array($matches[1], $arr)){
					$student->batch_id = 32;
					$student->save();
				}

				$arr = [];

				$arr = range(115, 120);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '182';
				$arr[] = '185';
				$arr[] = '188';
				$arr[] = '189';

				$arr2 = range(313, 324);
				$arr2 = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr2);

				$arr = array_merge( $arr2, $arr );

				if(in_array($matches[1], $arr)){
					$student->batch_id = 33;
					$student->save();
				}

				/*======= 2/4 sec 3=======*/
				$arr = [];

				$arr = range(121, 146);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				if(in_array($matches[1], $arr)){
					$student->batch_id = 34;
					$student->save();
				}

				$arr = [];

				$arr = range(147, 172);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				if(in_array($matches[1], $arr)){
					$student->batch_id = 35;
					$student->save();
				}

				$arr = [];

				$arr = range(173, 180);
				$arr = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr);

				$arr[] = '187';
				$arr[] = '190';

				$arr2 = range(325, 336);
				$arr2 = array_map(function($item) {
					return str_pad($item, 3, '0', STR_PAD_LEFT);
				}, $arr2);

				$arr = array_merge( $arr2, $arr );

				if(in_array($matches[1], $arr)){
					$student->batch_id = 36;
					$student->save();
				}

			}

			if(preg_match( '/^160115733163$/', $student->rollnum, $matches ) ) {
				$student->batch_id = 36;
				$student->save();

			}
		}
	}
}
