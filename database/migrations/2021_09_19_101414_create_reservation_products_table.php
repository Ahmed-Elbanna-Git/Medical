<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationProductsTable extends Migration {

	public function up()
	{
		Schema::create('reservation_products', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->integer('product_id')->unsigned();
			$table->integer('reservation_id')->unsigned();
			$table->integer('quantity')->nullable();
			$table->decimal('price', 8,2)->nullable();
			$table->decimal('total_price', 8,2)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reservation_products');
	}
}