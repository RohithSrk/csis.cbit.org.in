<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ElectiveReportExport implements FromView
{
	public $elective_id, $students;

	public function __construct($elective_id, $students){
		$this->elective_id = $elective_id;
		$this->students = $students;
	}

	public function view(): View
	{
		return view('partials.elective-report-table',
			['elective_id' => $this->elective_id, 'students' => $this->students]);
	}
}