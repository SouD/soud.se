<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Timeperiod extends Eloquent {

    use SoftDeletingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'timeperiods';

    protected $dates = array('deleted_at');
}
