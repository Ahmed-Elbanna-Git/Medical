<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorTimeSlotsTable extends Migration {

	public function up()
	{
		Schema::create('doctor_time_slots', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('doctor_working_hour_id')->unsigned();
			$table->datetime('from')->nullable();
			$table->datetime('to')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('doctor_time_slots');
	}
}