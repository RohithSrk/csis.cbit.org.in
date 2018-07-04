<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
	protected $fillable = array( 'name', 'code', 'type', 'curriculum_id' );

	public function teachers() {
		return $this->belongsToMany( Employee::class,
			'employee_subject', 'subject_id' );
	}

	public function department() {
		return $this->belongsTo( Department::class );
	}

	public function labMarkTypes() {
		return $this->hasMany( LabMarkType::class );
	}

	public function labMark2Types() {
		return $this->belongsToMany( LabMarkType::class );
	}

	public function sections() {
		return $this->belongsToMany( Section::class, 'employee_subject' );
	}

	public function getNameWithCode() {
		return $this->name . ' (' . $this->code . ')';
	}

	public function assignedFaculty( $section_id ) {
		return $this->belongsToMany( Employee::class, 'employee_subject' )
		            ->wherePivot( 'section_id', $section_id );
	}

	public function assignedSections( $employee_id ) {
		return $this->belongsToMany( Section::class, 'employee_subject' )
		            ->wherePivot( 'employee_id', $employee_id);
	}

	public function getAssignedFaculty( $section_id ) {
		return $this->belongsToMany( Employee::class, 'employee_subject' )
		            ->wherePivot( 'section_id', $section_id )
		            ->pluck('id')
		            ->toArray();
	}

	public function getAssignedFacultyNames( $section_id ) {
		return $this->belongsToMany( Employee::class, 'employee_subject' )
		            ->wherePivot( 'section_id', $section_id )
		            ->pluck('name', 'id')
		            ->toArray();
	}

	public function getYearSectionName( $section_id ){
		return \App\Section::getYearSectionName( $section_id );
	}

}
