<?php

class RoleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('roles')->delete();

		$adminRole = new Role;
		$adminRole->name = 'Admin';
		$adminRole->save();

		$userRole = new Role;
		$userRole->name = 'User';
		$userRole->save();

		$admin = User::where('email', '=', 'linus@soud.se')->firstOrFail();
		$admin->attachRole($adminRole);

		$user = User::where('email', '=', 'test@soud.se')->firstOrFail();
		$user->attachRole($userRole);
	}

}
