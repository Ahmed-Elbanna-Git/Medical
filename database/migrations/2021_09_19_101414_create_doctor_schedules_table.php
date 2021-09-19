<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorSchedulesTable extends Migration {

	public function up()
	{
		Schema::create('doctor_schedules', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('branch_id')->unsigned();
			$table->string('day', 255)->nullable();
			$table->boolean('active')->nullable()->default(0);
		});
	}

	public function down()
	{
		Schema::drop('doctor_schedules');
	}
}