<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentPlanServicesTable extends Migration {

	public function up()
	{
		Schema::create('treatment_plan_services', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('service_id')->unsigned();
			$table->integer('treatment_plan_id')->unsigned();
			$table->enum('status', array('pending', 'confirmed'))->nullable();
		});
	}

	public function down()
	{
		Schema::drop('treatment_plan_services');
	}
}