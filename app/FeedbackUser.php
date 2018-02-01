<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FeedbackUser extends Authenticatable
{
	use Notifiable;

	protected $guard = 'feedbackUser';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function section(){
		return $this->belongsTo(Section::class);
	}

	public function feedback(){
		return $this->belongsTo(Feedback::class);
	}

}
