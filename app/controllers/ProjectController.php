<?php

class ProjectController extends \BaseController {

    public function index()
    {
        $data = array(
            'projects' => Project::paginate(Project::PAGINATION_NUM_ITEMS)
        );

        return View::make('projects.index', $data);
    }

    public function show($id)
    {
        return $id;
    }

}
