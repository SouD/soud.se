<?php

class PermissionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('permissions')->delete();

		$manageProjects = new Permission;
		$manageProjects->name = 'manage_projects';
		$manageProjects->display_name = 'Manage Projects';
		$manageProjects->save();

		$admin = Role::where('name', '=', 'Admin')->firstOrFail();
		$admin->perms()->sync(array($manageProjects->id));
	}

}
