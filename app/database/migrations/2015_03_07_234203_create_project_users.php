<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('project_users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('project_id'); // the id of the bear
            $table->integer('user_id'); // the id of the picnic that this bear is at
            $table->boolean('accepted');
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

	}

}
