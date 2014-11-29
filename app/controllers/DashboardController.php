<?php

class DashboardController extends \BaseController {

    public function getDashboard()
    {
        return View::make('dashboard.index');
    }

}
