<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class ElectiveSelection extends Mailable
{
    use Queueable, SerializesModels;

	public $name;
	public $electiveName;
	public $actionUrl;
	public $actionText = 'Select Elective';

	/**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $electiveName, $url)
    {
        $this->actionUrl = $url;
        $this->name = $name;
        $this->electiveName = $electiveName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@csis.cbit.org.in', config('app.name' ))
                    ->subject($this->electiveName . ' Subject Selection Remainder')
                    ->markdown('emails.electives.remainder')
                    ->attach(Storage::disk('public')->path('CSE - IV Year Syllabus-16.pdf'), [
	                    'as' => 'CSE - IV Year Syllabus-16.pdf',
	                    'mime' => 'application/pdf',
                    ] );
//			        ->attach(Storage::disk('public')->path('electives.pdf'), [
//				        'as' => 'BE 3⁄4 CSE I-Semester ELECTIVE–II Syllabus.pdf',
//				        'mime' => 'application/pdf',
//			        ] );
    }
}
