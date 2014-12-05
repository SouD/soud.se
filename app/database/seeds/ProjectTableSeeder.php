<?php

class ProjectTableSeeder extends Seeder {

	public function run()
	{
		DB::table('projects')->delete();

		$status = Status::findOrFail(1);
		$adminProject = new Project;
		$adminProject->name = 'AdminTime';
		$adminProject->status()->associate($status);
		$adminProject->save();

		$userProject = new Project;
		$userProject->name = 'UserTime';
		$userProject->status()->associate($status);
		$userProject->save();

		$admin = User::where('email', '=', 'linus@soud.se')->firstOrFail();
		$admin->projects()->attach($adminProject->id);

		$user = User::where('email', '=', 'test@soud.se')->firstOrFail();
		$user->projects()->attach($userProject->id);
	}

}
