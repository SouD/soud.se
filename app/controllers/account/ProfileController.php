<?php namespace Account;

use BaseController;
use View;
use Auth;
use Input;
use Validator;
use Redirect;
use Session;

class ProfileController extends BaseController {

	public function index()
	{
		return View::make('account.profile.index')->with('user', Auth::user());
	}

	public function update()
	{
		if (Input::has('password'))
		{
			return $this->updateSecurity();
		}
		else
		{
			return $this->updateDetails();
		}
	}

	protected function updateDetails()
	{
		$regex = '/^[\s-\pL\pN_\/]++$/uD';
		$locationRegex = '/^[,\s-\pL\pN_\/]++$/uD';
		$rules = array(
			'first_name' => 'regex:' . $regex,
			'last_name'  => 'regex:' . $regex,
			'phone'      => 'alpha_dash',
			'company'    => 'regex:' . $regex,
			'location'   => 'regex:' . $locationRegex,
		);
		$validator = Validator::make(Input::except('email'), $rules);

		if ($validator->fails())
		{
			return Redirect::route('account.profile')
				->withErrors($validator)
				->withInput(Input::all());
		}
		else
		{
			$user = Auth::user();
			$user->first_name = Input::get('first_name');
			$user->last_name  = Input::get('last_name');
			$user->phone      = Input::get('phone');
			$user->company    = Input::get('company');
			$user->location   = Input::get('location');
			$user->save();

			Session::flash('message', $user->email . ' was updated!');

			return Redirect::route('account.profile');
		}
	}

	protected function updateSecurity()
	{

	}

}
