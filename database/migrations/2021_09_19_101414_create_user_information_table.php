<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserInformationTable extends Migration {

	public function up()
	{
		Schema::create('user_information', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('option', 255)->nullable();
			$table->string('value', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('user_information');
	}
}