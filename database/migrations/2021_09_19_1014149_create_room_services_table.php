<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomServicesTable extends Migration {

	public function up()
	{
		Schema::create('room_services', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('service_id')->unsigned();
			$table->integer('room_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('room_services');
	}
}