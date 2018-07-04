<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentEmailSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$mails=<<<EOL
    	{
"160114733027": "adiagarwal96@ymail.com",
"160114733028": "adarshjange96@gmail.com",
"160114733036": "gowthamvarma1997@gmail.com",
"160114733048": "ranateja@gmail.com",
"160114733311": "hemanthteja123@gmail.com",
"160115733001": "akhilachowdary98@gmail.com",
"160115733002": "lfatima4783@gmail.com",
"160115733003": "harshithaadluri@gmail.com",
"160115733004": "sankekeerthi4@gmail.com",
"160115733005": "manishakatravath@gmail.com",
"160115733006": "monica.srkp@gmail.com",
"160115733007": "komuravelly.neha@gmail.com",
"160115733008": "bpallavi46@gmail.com",
"160115733009": "revathirao.patwari@gmail.com",
"160115733010": "sahithireddy29797@gmail.com",
"160115733011": "vslkreddy@gmail.com",
"160115733013": "aallasamhita@gmail.com",
"160115733014": "mnr.7924@gmail.com",
"160115733015": "shirisha1357@gmail.com",
"160115733016": "therushreyat@gmail.com",
"160115733017": "spandanasweety78@gmail.com",
"160115733018": "chandusri984@gmail.com",
"160115733019": "swimitha@gmail.com",
"160115733020": "kannuriajay5@gmail.com",
"160115733021": "akhilvaska1@gmail.com",
"160115733022": "anirudhkaluri@gmail.com",
"160115733023": "somarapuaravind@gmail.com",
"160115733024": "bhanubtg@gmail.com",
"160115733026": "bhargav.g33@gmail.com",
"160115733027": "arutladevaksai@gmail.com",
"160115733028": "devnath647@gmail.com",
"160115733029": "challahari520@gmail.com",
"160115733030": "harshrathi71@gmail.com",
"160115733031": "hemanth26rulz@gmail.com",
"160115733032": "itheshmuppaneni@gmail.com",
"160115733033": "dkaranreddyy00@gmail.com",
"160115733034": "manishram486@gmail.com",
"160115733035": "manojkumartmk303@gmail.com",
"160115733036": "mnrkumarmalladi@gmail.commn",
"160115733037": "nagnagarjun01@gmail.com",
"160115733038": "nikhilgayam98@gmail.com",
"160115733039": "bnikhil.1998@gmail.com",
"160115733040": "pavansai57@gmail.com",
"160115733041": "chpreetham322@gmail.com",
"160115733042": "raghavendraraokotha@gmail.com",
"160115733043": "rahulnagu478@gmail.com",
"160115733044": "rahul.komaravelly@gmail.com",
"160115733045": "ravitejagannamaraju@gmail.com",
"160115733046": "chandrarohith967@gmail.com",
"160115733047": "saianish100@gmail.com",
"160115733048": "saiavinashbommakanti@gmail.com",
"160115733049": "skrallala752@gmail.com",
"160115733050": "revannth1997@gmail.com",
"160115733051": "sai.pallipat@gmail.com",
"160115733052": "saivikhyath98@gmail.com",
"160115733053": "s19v1997@gmail.com",
"160115733055": "sonub396@gmail.com",
"160115733056": "srinath.tangalapally@gmail.com",
"160115733057": "srujanveshg@gmail.com",
"160115733058": "venkat1125@icloud.com",
"160115733059": "srivatsa28@gmail.com",
"160115733060": "reddyvineeth6@gmail.com",
"160115733181": "mounikareddy.bakaram@gmail.com",
"160115733301": "naveenv.vanamala@gmail.com",
"160115733302": "shravanikamatala96@gmail.com",
"160115733303": "sai99488@gmail.com",
"160115733304": "srinivasbojja333@gmail.com",
"160115733305": "gouthamireddygidde@gmail.com",
"160115733306": "Lingampallipravalika567@gmail.com",
"160115733307": "jhansijhan67@gmail.com",
"160115733308": "prasannadanappagari@gmail.com",
"160115733309": "mohdabdulsamad44@gmail.com",
"160115733310": "sreerupa168@gmail.com",
"160115733311": "kallasoundarya311@gmail.com",
"160115733312": "bhongiritejaswi24@gmail.com"
}
EOL;


		$mails = json_decode($mails);


//		foreach (\App\Student::all() as $student){
//			$student->email = '';
//			$student->save();
//		}

//	    $i = 0;
	    foreach ($mails as $rollnum => $mail){

		    $student = Student::where('rollnum', $rollnum)->first();

    		if( ! empty( $student) ){
    			$student->email = $mail;

//			    if($student->email != $mail){
//			    	echo ++$i,' ', $student->rollnum, "\n";
//			    }

    			$student->user->email = $mail;
    			$student->user->save();
    			$student->save();
		    }
	    }
    }
}
