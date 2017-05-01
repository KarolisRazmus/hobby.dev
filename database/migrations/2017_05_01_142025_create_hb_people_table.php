<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHbPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_people', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('hb_cities_id', 36)->index('fk_hb_people_hb_cities1_idx');
			$table->string('name');
			$table->string('email');
			$table->string('phone');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_people');
	}

}
