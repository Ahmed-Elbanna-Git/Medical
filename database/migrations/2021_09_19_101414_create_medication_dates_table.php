<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicationDatesTable extends Migration {

	public function up()
	{
		Schema::create('medication_dates', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->softDeletes();
			$table->integer('medication_id')->unsigned();
			$table->time('date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('medication_dates');
	}
}