<?php

class HomeController extends \BaseController {

    public function showWelcome()
    {
        $birthdate = new DateTime('1990-10-04');
        $today = new DateTime();
        $interval = $today->diff($birthdate);
        $age = $interval->format('%y');

        $data = array(
            'age' => $age,
            // 'projects' => Project::orderBy('updated_at', 'desc')->paginate(Project::API_PAGINATION_NUM_ITEMS)
        );

        return View::make('welcome.index', $data);
    }

}
