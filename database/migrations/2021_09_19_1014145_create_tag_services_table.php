<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagServicesTable extends Migration {

	public function up()
	{
		Schema::create('tag_services', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('tag_id')->unsigned();
			$table->integer('service_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tag_services');
	}
}