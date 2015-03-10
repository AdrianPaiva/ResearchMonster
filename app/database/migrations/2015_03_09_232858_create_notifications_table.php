<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('notifications', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('project_id')->unsigned()->nullable(); //
            $table->integer('userId')->unsigned();
            $table->integer('applicantId')->unsigned();//
            $table->string('title')->nullable();
            $table->string('message');
            $table->boolean('project_application')->nullable();
            $table->boolean('accepted_to_project')->nullable();
            $table->boolean('denied_from_project')->nullable();
            $table->timestamps();

            $table->foreign('userId')
                ->references('userId')->on('users')
                ->onDelete('cascade');

            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');
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
