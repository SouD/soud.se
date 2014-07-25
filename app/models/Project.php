<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Project extends Eloquent {

    use SoftDeletingTrait;

    const PAGINATION_NUM_ITEMS = 10;
    const API_PAGINATION_NUM_ITEMS = 2;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    protected $dates = array('deleted_at');
}
