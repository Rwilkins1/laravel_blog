<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTableMigration extends Migration {

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
			$table->string('firstname', 100);
			$table->string('lastname', 100);
			$table->string('username', 255)->unique();
			$table->string('email', 150)->unique();
			$table->string('password', 255);
			$table->string('phone', 20)->nullable();
			$table->rememberToken();
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
		// Schema::dropColumn('rememberToken');
		Schema::drop('users');
	}

}

