<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apartments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('primary_image');
			$table->integer('gallery_id');
			$table->string('town');
			$table->string('town_area');
			$table->string('address');
			$table->string('remote_link');
			$table->string('floor');
			$table->integer('rooms');
			$table->integer('area');
			$table->integer('rent');
			$table->date('last_apply_date');
			$table->text('short_info');
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
		Schema::drop('apartments');
	}

}
