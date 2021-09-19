<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitProductAmountTable extends Migration {

	public function up()
	{
		Schema::create('unit_product_amount', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('unit_id')->unsigned();
			$table->integer('amount')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('unit_product_amount');
	}
}