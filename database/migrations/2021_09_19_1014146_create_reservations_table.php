<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	public function up()
	{
		Schema::create('reservations', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('branch_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->integer('promo_code_id')->unsigned()->nullable();
			$table->enum('status', array('start', 'pending', 'finished', 'cancel'));
			$table->decimal('total', 8,2)->nullable();
			$table->decimal('discount', 8,2)->nullable();
			$table->string('discount_type', 255)->nullable();
			$table->decimal('discount_amount', 8,2)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reservations');
	}
}