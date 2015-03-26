<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->integer('userId')->unsigned();
            $table->longText('summary')->nullable();
            $table->longText('experience')->nullable();
            $table->string('attachment')->nullable();
            $table->string('attachmentName')->nullable();
            $table->string('postedBy');
            $table->string('projectPartner')->nullable();
            $table->string('centre')->nullable();
            $table->string('principalInvestigator')->nullable();
            $table->foreign('userId')
                ->references('userId')->on('users')
                ->onDelete('cascade');

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
