<?php

class PermissionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('permissions')->delete();

		$manageProjects = new Permission;
		$manageProjects->name = 'manage_projects';
		$manageProjects->display_name = 'Manage projects';
		$manageProjects->save();

		$viewProjects = new Permission;
		$viewProjects->name = 'view_projects';
		$viewProjects->display_name = 'View projects';
		$viewProjects->save();

		$manageUsers = new Permission;
		$manageUsers->name = 'manage_users';
		$manageUsers->display_name = 'Manage users';
		$manageUsers->save();

		$viewUsers = new Permission;
		$viewUsers->name = 'view_users';
		$viewUsers->display_name = 'View users';
		$viewUsers->save();

		$manageSettings = new Permission;
		$manageSettings->name = 'manage_settings';
		$manageSettings->display_name = 'Manage settings';
		$manageSettings->save();

		$viewSettings = new Permission;
		$viewSettings->name = 'view_settings';
		$viewSettings->display_name = 'View settings';
		$viewSettings->save();

		// Retrieve the admin role
		$admin = Role::where('name', '=', 'Admin')->firstOrFail();

		// Add admin perms
		$admin->perms()->sync(array($manageProjects->id));
		$admin->perms()->sync(array($manageUsers->id));
		$admin->perms()->sync(array($manageSettings->id));

		// Retrieve the user role
		$user = Role::where('name', '=', 'User')->firstOrFail();

		// Add user perms
		$user->perms()->sync(array($viewProjects->id));
		$user->perms()->sync(array($viewUsers->id));
		$user->perms()->sync(array($viewSettings->id));
	}

}
