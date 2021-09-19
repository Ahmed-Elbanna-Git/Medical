<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicationsTable extends Migration {

	public function up()
	{
		Schema::create('medications', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->integer('reservation_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('medication_name', 255)->nullable();
			$table->integer('dose')->nullable();
			$table->longText('note')->nullable();
			$table->date('start_date')->nullable();
			$table->datetime('end_date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('medications');
	}
}