<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHbPeopleHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_people_hobbies_connections', function(Blueprint $table)
		{
			$table->integer('count')->unique('count_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('people_id', 36)->index('fk_hb_people_hobbies_connections_hb_people_idx');
			$table->string('hobbies_id', 36)->index('fk_hb_people_hobbies_connections_hb_hobbies1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_people_hobbies_connections');
	}

}
