<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamOwnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_owners', function($table){
			$table->increments('id');
			$table->string('ownername');
			$table->string('id_no');
			$table->string('ownerlocation');
			$table->string('ownerphone');
			$table->string('owneremail')->unique();
			$table->string('ownerage');
			$table->string ('team_id');
			$table->string ('rand_num');
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
		Schema::drop('team_owners');
	}

}
