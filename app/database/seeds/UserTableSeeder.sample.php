<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'email'    => 'linus@soud.se',
			'password' => Hash::make('secret'),
		));
	}

}
