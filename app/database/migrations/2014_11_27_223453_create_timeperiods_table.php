<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeperiodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timeperiods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('start')->nullable();
			$table->dateTime('end')->nullable();
			$table->integer('epoch')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timeperiods');
	}

}
