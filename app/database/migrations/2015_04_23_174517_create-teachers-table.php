<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('lastname');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('position');
			$table->string('course');
			$table->text('quote');
			$table->string('email')->nullable();
			$table->string('image')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teachers');
	}

}
