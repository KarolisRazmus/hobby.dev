<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHbPeopleHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hb_people_hobbies_connections', function(Blueprint $table)
		{
			$table->foreign('hobbies_id', 'fk_hb_people_hobbies_connections_hb_hobbies1')->references('id')->on('hb_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('people_id', 'fk_hb_people_hobbies_connections_hb_people')->references('id')->on('hb_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hb_people_hobbies_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_hb_people_hobbies_connections_hb_hobbies1');
			$table->dropForeign('fk_hb_people_hobbies_connections_hb_people');
		});
	}

}
