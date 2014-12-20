<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('personal_code_number');
			$table->string('address');
			$table->string('city');
			$table->string('zip_code');
			$table->integer('income');
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
		Schema::drop('users_info');
	}

}
