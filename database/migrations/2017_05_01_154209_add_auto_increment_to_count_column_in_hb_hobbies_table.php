<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAutoIncrementToCountColumnInHbHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hb_hobbies', function (Blueprint $table)
        {
            $table->primary('id');
            $table->integer('count', true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hb_hobbies', function (Blueprint $table)
        {
            $table->integer('count', false)->change();
            $table->dropPrimary('id');
        });
    }
}
