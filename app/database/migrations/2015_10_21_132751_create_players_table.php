<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('location');
			$table->string('phone');
			$table->string('email')->unique();
			$table->string('age');
			$table->string('id_copy')->nullable();
			$table->string('photo')->nullable();
			$table->string('team_id');
			$table->string('rand_num');
			$table->string('teamowner');
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
		Schema::drop('players');
	}

}
