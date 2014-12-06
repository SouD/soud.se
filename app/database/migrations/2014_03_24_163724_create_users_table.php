<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 64);
			$table->string('phone')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('url')->nullable();
			$table->string('company')->nullable();
			$table->string('location')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('remember_token', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
