<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_profiles', function($table)
        {
            $table->integer('userId');
            $table->string('email')->nullable();
            $table->string('program')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('picture')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('skills')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('user_profiles');
	}

}
