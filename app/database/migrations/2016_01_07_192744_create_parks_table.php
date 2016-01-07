<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parks', function($table) {
			$table->increments('id');
			$table->string('name', 240);
			$table->text('description', 1000);
			$table->date('date_established');
			$table->float('area_in_acres');
			$table->string('location', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('parks');
	}

}

