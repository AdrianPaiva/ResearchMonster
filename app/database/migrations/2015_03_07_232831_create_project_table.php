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
            $table->string('postedBy');
            $table->longText('summary')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('skills')->nullable();
            $table->string('attachment')->nullable();
            $table->string('attachmentName')->nullable();

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
