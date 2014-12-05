<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Status extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'statuses';

	/**
	 * The properties guarded from assignment.
	 *
	 * @var string
	 */
	protected $guarded = array('id');

	/**
	 * Get associated projects.
	 *
	 * @return Eloquent
	 */
	public function projects()
	{
		return $this->hasMany('Project');
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
}
