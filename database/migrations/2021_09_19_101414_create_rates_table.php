<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatesTable extends Migration {

	public function up()
	{
		Schema::create('rates', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->float('rate')->nullable();
			$table->longText('comment')->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('model_id')->nullable();
			$table->string('model_type', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('rates');
	}
}