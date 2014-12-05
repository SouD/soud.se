<?php

class StatusTableSeeder extends Seeder {

	public function run()
	{
		DB::table('statuses')->delete();

		$statuses = array(
			array(
				'name'  => 'active',
				'class' => 'primary'
			),
			array(
				'name'  => 'inactive',
				'class' => 'info'
			),
			array(
				'name'  => 'paused',
				'class' => 'warning'
			),
			array(
				'name'  => 'on_hold',
				'class' => 'warning'
			),
			array(
				'name'  => 'cancelled',
				'class' => 'danger'
			),
			array(
				'name'  => 'completed',
				'class' => 'success'
			),
			array(
				'name'  => 'failed',
				'class' => 'danger',
			),
		);

		foreach ($statuses as $status)
		{
			Status::create($status);
		}
	}

}
