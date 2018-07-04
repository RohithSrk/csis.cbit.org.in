<?php

namespace App\Jobs;

use App\Mail\ElectiveSelected;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user, $name, $electiveName, $subjectName, $subjectCode;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $name, $electiveName, $subjectName, $subjectCode)
    {
        $this->user = $user;
        $this->name = $name;
        $this->electiveName = $electiveName;
        $this->subjectName = $subjectName;
        $this->subjectCode = $subjectCode;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
	    if(preg_match('/yahoo|outlook|windowslive|ymail/', $this->user->email)){
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
		    Mail::to($this->user)
		        ->send(new ElectiveSelected($this->name, $this->electiveName, $this->subjectName, $this->subjectCode));

		    // Restore your original mailer
		    Mail::setSwiftMailer($backup);

	    } else {
		    Mail::to($this->user)
		        ->send(new ElectiveSelected($this->name, $this->electiveName, $this->subjectName, $this->subjectCode));
	    }
    }
}
