<?php

use App\Role;
use App\User;
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
		
	}

	public function addStudents(){

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
