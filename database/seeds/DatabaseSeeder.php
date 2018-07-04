<?php

use App\Mail\ElectiveSelection;
use App\Role;
use App\User;
use App\Subject;
use App\Semester;
use App\Student;
use App\Elective;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
    	// sem4 sec1 - 28 29 30
    	// sem4 sec2 - 31 32 33
    	// sem4 sec3 - 34 35 36
//	    $this->call(UsersTableSeeder::class);
//	    $this->call(StudentEmailSeeder::class);
//	    $this->call(StudentEmailSeeder2::class);

//	    $semester = Semester::find(6);
//	    $students = $semester->sections->find(10)->batches->find(28)->students;
//	    $elective = Semester::find( $semester->id + 1 )->electives->first();

	    $students = Student::whereIN('rollnum', [ '160115733002' ])->get();
//	    $students = Student::whereIN('batch_id', [34,35,36])->get();
//	    $students = Student::whereIN('batch_id', [31,32,33])->get();

//	    $students = Student::whereIN('batch_id', [46,47,48])->get();
//	    $students = Student::whereIN('batch_id', [49,50,51])->get();
//	    $students = Student::whereIN('batch_id', [52,53,54])->get();

//	    $students = Student::whereIN('batch_id', [49])->get();
//	    $students = Student::whereIN('batch_id', [50])->get();
//	    $students = Student::whereIN('batch_id', [51])->get();
	    //resend
//	    $students = Student::whereIN('rollnum', ['160115733141'])->get();

	    $sendmail = true;

	    foreach ($students as $student){
		    $semester = $student->batch->section->semester;
		    $elective = Semester::find( $semester->id + 1 )->electives->first();
		    $user = $student->user;
		    $name = ucwords( strtolower( $student->name ) );
		    $electiveName = $elective->name;
		    $url = URL::signedRoute('elective', ['user_id' => $user->id]);

		    if(empty($student->email)){
		    	echo "Email not available for { $student->name } ({$student->rollnum})\n";
		    	continue;
		    } else {
			    echo "Sending mail to " . $student->name . ' ('. $user->email .')' . "\n";
		    }

//		    if($student->rollnum == 160116733310){
//		    	$sendmail = true;
//		    }

			if($sendmail){
				if(preg_match('/yahoo|outlook|windowslive|ymail/', $user->email)){
					// Backup your default mailer
					$backup = Mail::getSwiftMailer();

					// Setup your gmail mailer
					$transport = new \Swift_SmtpTransport('smtp.gmail.com', 587, 'tls');
					$transport->setUsername('cseadmin@cbit.ac.in');
					$transport->setPassword('cse12345');
					// Any other mailer configuration stuff needed...
					$gmail = new \Swift_Mailer($transport);

					// Set the mailer as gmail
					Mail::setSwiftMailer($gmail);

					// Send your message
					Mail::to($user)->send(new ElectiveSelection( $name, $electiveName, $url));

					// Restore your original mailer
					Mail::setSwiftMailer($backup);

				} else {
					Mail::to($user)->send(new ElectiveSelection( $name, $electiveName, $url));
				}
			}

	    }


//	    $elective = new Elective();
//	    $elective->name = "Elective-II";
//	    $elective->semester_id = 5;
//	    $elective->save();
//
//	    $subject = new Subject();
//	    $subject->name = "Mobile Application Development";
//	    $subject->code = "16CSE04";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 5;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Computer Graphics";
//	    $subject->code = "16CSE05";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 5;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Advanced Computer Architecture";
//	    $subject->code = "16CSE06";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 5;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $elective = new Elective();
//	    $elective->name = "Elective-IV";
//	    $elective->semester_id = 7;
//	    $elective->save();
//
//	    $subject = new Subject();
//	    $subject->name = "Mobile Computing";
//	    $subject->code = "CS461";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 7;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Adhoc Sensor Networks";
//	    $subject->code = "CS462";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 7;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Optimization Techniques";
//	    $subject->code = "CS463";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 7;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Open SourceTechnologies";
//	    $subject->code = "CS464";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 7;
//	    $subject->save();
//
//	    $elective->subjects()->attach($subject);
//
//	    $subject = new Subject();
//	    $subject->name = "Software Project Management";
//	    $subject->code = "CS465";
//	    $subject->type = "elective";
//	    $subject->curriculum_id = 2;
//	    $subject->department_id = 1;
//	    $subject->semester_id = 7;
//	    $subject->save();


    }
}
