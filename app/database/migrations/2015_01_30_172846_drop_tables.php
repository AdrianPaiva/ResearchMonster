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
        Schema::table('password_reminders', function($table)
        {
            $table->dropIfExists('password_reminders');

        });
        Schema::table('notifications', function ($table) {
            $table->dropIfExists('notifications');

        });
        Schema::table('user_profiles', function($table)
        {
            $table->dropIfExists('user_profiles');

        });
        Schema::table('projects', function ($table) {
            $table->dropIfExists('projects');

        });
        Schema::table('users', function($table)
        {
            $table->dropIfExists('users');

        });
        Schema::table('notifications', function ($table) {
            $table->dropIfExists('notifications');

        });


        Schema::table('project_users', function ($table) {
            $table->dropIfExists('project_users');

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
