<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TimePeriod extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'timeperiods';

	/**
	 * The properties guarded from assignment.
	 *
	 * @var string
	 */
	protected $guarded = array('id');

	/**
	 * Get owner user.
	 *
	 * @return Eloquent
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Get owner project.
	 *
	 * @return Eloquent
	 */
	public function project()
	{
		return $this->belongsTo('Project');
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
