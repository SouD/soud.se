<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Project extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * The properties guarded from assignment.
	 *
	 * @var string
	 */
	protected $guarded = array('id');

	/**
	 * Get associated users.
	 *
	 * @return Eloquent
	 */
	public function users()
	{
		return $this->belongsToMany('User', 'user_project');
	}

	/**
	 * Get associated time periods.
	 *
	 * @return Eloquent
	 */
	public function timePeriods()
	{
		return $this->hasMany('TimePeriod');
	}

	/**
	 * Get associated status.
	 *
	 * @return Eloquent
	 */
	public function status()
	{
		return $this->belongsTo('Status');
	}

}
