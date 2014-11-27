<?php

class HomeController extends \BaseController {

    public function showWelcome()
    {
        $birthdate = new DateTime('1990-10-04');
        $today = new DateTime();
        $interval = $today->diff($birthdate);
        $age = $interval->format('%y');

        $data = array(
            'age' => $age
        );

        return View::make('welcome.index', $data);
    }

}
