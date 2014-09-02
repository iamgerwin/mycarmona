<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCctvsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cctvs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->index('name');
			$table->string('location');
			$table->text('description');
			$table->string('link')->unique();
			$table->boolean('active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cctvs');
	}

}
