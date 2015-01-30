<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('roles', function($table)
        {
            $table->dropIfExists('roles');

        });

        Schema::table('user_profiles', function($table)
        {
            $table->dropIfExists('user_profiles');

        });

        Schema::table('users', function($table)
        {
            $table->dropIfExists('users');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
