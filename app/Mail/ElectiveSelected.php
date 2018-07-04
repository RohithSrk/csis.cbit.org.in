<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ElectiveSelected extends Mailable
{
    use Queueable, SerializesModels;

	public $name;
	public $electiveName;
	public $subjectName;
	public $subjectCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $electiveName, $subjectName, $subjectCode)
    {
	    $this->name         = $name;
	    $this->electiveName = $electiveName;
	    $this->subjectName  = $subjectName;
	    $this->subjectCode  = $subjectCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    return $this->from('no-reply@csis.cbit.org.in', config('app.name' ))
	                ->subject( 'Success! Your selection has been recorded for ' . $this->electiveName )
	                ->markdown('emails.electives.selected');
    }
}
