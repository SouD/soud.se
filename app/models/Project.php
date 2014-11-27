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

    protected $dates = array('deleted_at');
}
