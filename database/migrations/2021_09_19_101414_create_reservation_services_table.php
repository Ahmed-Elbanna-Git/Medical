<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationServicesTable extends Migration {

	public function up()
	{
		Schema::create('reservation_services', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('service_id')->unsigned();
			$table->integer('reservation_id')->unsigned();
			$table->decimal('net_price', 8,2)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reservation_services');
	}
}