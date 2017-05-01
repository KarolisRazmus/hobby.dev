<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHbPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hb_people', function(Blueprint $table)
		{
			$table->foreign('hb_cities_id', 'fk_hb_people_hb_cities1')->references('id')->on('hb_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hb_people', function(Blueprint $table)
		{
			$table->dropForeign('fk_hb_people_hb_cities1');
		});
	}

}
