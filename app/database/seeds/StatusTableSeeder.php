<?php

class StatusTableSeeder extends Seeder {

	public function run()
	{
		DB::table('statuses')->delete();

		$statuses = array(
			array(
				'name'         => 'active',
				'class'        => 'primary',
				'display_name' => 'Active',
			),
			array(
				'name'         => 'inactive',
				'class'        => 'info',
				'display_name' => 'Inactive',
			),
			array(
				'name'         => 'paused',
				'class'        => 'warning',
				'display_name' => 'Paused',
			),
			array(
				'name'         => 'on_hold',
				'class'        => 'warning',
				'display_name' => 'On hold',
			),
			array(
				'name'         => 'cancelled',
				'class'        => 'danger',
				'display_name' => 'Cancelled',
			),
			array(
				'name'         => 'completed',
				'class'        => 'success',
				'display_name' => 'Completed',
			),
			array(
				'name'         => 'failed',
				'class'        => 'danger',
				'display_name' => 'Failed',
			),
		);

		foreach ($statuses as $status)
		{
			Status::create($status);
		}
	}

}
