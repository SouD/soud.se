<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('StatusTableSeeder');
		$this->call('ProjectTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('PermissionTableSeeder');
	}

}