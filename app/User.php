<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

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

    public function employee(){
    	return $this->belongsTo(Employee::class);
    }

	public function isBelongsToMultipleDeps(){
		return ($this->employee()->first()->departments()->count() > 1);
	}

	public function getDepartmentsArray(){
		return $this->employee()->first()->departments()->pluck('code', 'id')->toArray();
	}

	public function getAssignedLabSubjectsArray(){
		return $this->employee()->first()->subjects()->select(DB::raw("CONCAT(subjects.name, ' (',subjects.code,')') as name"), 'id')->pluck('name', 'id')->toArray();
	}

	public function firstDepartment(){
		return $this->employee()->first()->departments()->first();
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

	/**
	 * Check multiple roles
	 * @param array $roles
	 */
	public function hasAnyRole($roles)
	{
		return null !== $this->roles()->whereIn('name', $roles)->first();
	}

	/**
	 * Check one role
	 * @param string $role
	 */
	public function hasRole($role)
	{
		return null !== $this->roles()->where('name', $role)->first();
	}

	/**
	 * @param string|array $roles
	 */
	public function authorizeRoles($roles)
	{
		if (is_array($roles)) {
			return $this->hasAnyRole($roles) ||
			       abort(401, 'This action is unauthorized.');
		}
		return $this->hasRole($roles) ||
		       abort(401, 'This action is unauthorized.');
	}
}

