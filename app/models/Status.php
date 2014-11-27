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

    protected $dates = array('deleted_at');
}
