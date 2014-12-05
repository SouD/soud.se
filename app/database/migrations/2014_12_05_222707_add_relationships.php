<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationships extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function(Blueprint $table)
		{
			$table->integer('status_id')->unsigned();
			$table->foreign('status_id')->references('id')->on('statuses');
		});

		Schema::table('timeperiods', function(Blueprint $table)
		{
			$table->integer('status_id')->unsigned();
			$table->foreign('status_id')->references('id')->on('statuses');
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projects', function(Blueprint $table)
		{
			$table->dropForeign('projects_status_id_foreign');
		});

		Schema::table('timeperiods', function(Blueprint $table)
		{
			$table->dropForeign('timeperiods_status_id_foreign');
			$table->dropForeign('timeperiods_project_id_foreign');
			$table->dropForeign('timeperiods_user_id_foreign');
		});
	}

}
