<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentPlansTable extends Migration {

	public function up()
	{
		Schema::create('treatment_plans', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 255)->nullable();
			$table->integer('user_id')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('reservation_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('treatment_plans');
	}
}