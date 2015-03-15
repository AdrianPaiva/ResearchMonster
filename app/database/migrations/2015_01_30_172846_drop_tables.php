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
        Schema::table('project_recommended_users', function ($table) {
            $table->dropIfExists('project_recommended_users');

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

        Schema::table('project_skills', function ($table) {
            $table->dropIfExists('project_skills');

        });

        Schema::table('user_skills', function ($table) {
            $table->dropIfExists('user_skills');

        });
        Schema::table('skills', function ($table) {
            $table->dropIfExists('skills');

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
